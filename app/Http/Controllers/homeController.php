<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\SantriDetail;
use App\Models\RefKamar;
use App\Models\RefKelas;
use App\Models\EmployeeNew;
use App\Models\PsbGelombangDetail;
use App\Models\PsbGelombang;
use App\Models\PsbSlide;

class homeController extends Controller
{
    //
    public function index(){
        $id_gelombang = PsbGelombang::where('pmb_online',1)->first()->id;
        $slide = PsbSlide::all();
        $detail = PsbGelombangDetail::where('id_gelombang',$id_gelombang)->first();
        return view('home', compact('detail','slide'));

    }
    public function pesantren(){
        return view('pesantren');
    }
    public function visi_misi(){
        return view('kepesantrenan/visi_misi');
    }
    public function kurikulum(){
        return view('pesantren');
    }
    public function fasilitas(){
        return view('kepesantrenan/fasilitas');
    }
    public function jadwal_kegiatan(){
        return view('kepesantrenan/jadwal_kegiatan');
    }
    public function biaya_administrasi(){
        return view('kepesantrenan/biaya_administrasi');
    }
    public function materi_test(){
        $gelombang = PsbGelombang::where('pmb_online', 1)->first();
        $id_gelombang = $gelombang->id ?? 1;
        $detail = PsbGelombangDetail::where('id_gelombang', $id_gelombang)->first();
        $materi_test = $detail->materi_test ?? ($gelombang->materi_test ?? '');

        return view('kepesantrenan/materi_test', compact('detail', 'gelombang', 'materi_test'));
    }
    public function materi_didik(){
        return view('kepesantrenan/materi_didik');
    }
    public function program_kegiatan(){

        return view('program_kegiatan');
    }
    public function santri_aktif(){
        $var['santri'] = SantriDetail::orderBy('kelas','asc')->get();
        $employee = EmployeeNew::all();
        $pegawai = array();
        $pegawai[0] = "Kosong";
        return view('santri_aktif',compact('var','pegawai'));
    }

    public function alumni(){
        $alumni = DB::table('tb_alumni_santri_detail AS tbAlumni')
            ->select(
                'tbAlumni.*',
                DB::raw("CONCAT(SUBSTRING(tbAlumni.no_hp, 1, 8), '****') AS no_hp"),
                'ref_kamar.employee_id AS kamar_employee_id',
                'ref_kelas.employee_id AS kelas_employee_id',
                'guru_murroby.nama AS guru_murroby',
                'wali_kelas.nama AS wali_kelas',
                'tb_alumni.angkatan as angkatan'
            )
            ->leftJoin('tb_alumni', 'tbAlumni.no_induk', '=', 'tb_alumni.no_induk')
            ->leftJoin('ref_kamar', 'tbAlumni.kamar_id', '=', 'ref_kamar.id')
            ->leftJoin('ref_kelas', 'tbAlumni.kelas', '=', 'ref_kelas.code')
            ->leftJoin('employee_new AS guru_murroby', 'ref_kamar.employee_id', '=', 'guru_murroby.id')
            ->leftJoin('employee_new AS wali_kelas', 'ref_kelas.employee_id', '=', 'wali_kelas.id')
            ->orderBy('tbAlumni.nama', 'asc')
            ->get();

        foreach ($alumni as $row) {
            if (!empty($row->nama)) {
                $row->nama = $this->rapikanNama($row->nama);
            }
            if (!empty($row->guru_murroby)) {
                $row->guru_murroby = $this->rapikanNama($row->guru_murroby);
            }
            if (!empty($row->wali_kelas)) {
                $row->wali_kelas = $this->rapikanNama($row->wali_kelas);
            }
        }

        return view('alumni', compact('alumni'));
    }

    public function alumni_khotimin(){
        $baseQuery = DB::table('tbl_khotimin')
            ->leftJoin('santri_detail', function ($join) {
                $join->on('tbl_khotimin.santri_id', '=', 'santri_detail.id')
                     ->orOn('tbl_khotimin.kode_santri', '=', 'santri_detail.no_induk');
            })
            ->leftJoin('tb_alumni_santri_detail', 'tbl_khotimin.kode_santri', '=', 'tb_alumni_santri_detail.no_induk')
            ->select([
                DB::raw("COALESCE(santri_detail.nama, tb_alumni_santri_detail.nama, 'Santri') AS nama"),
                DB::raw("COALESCE(santri_detail.no_induk, tb_alumni_santri_detail.no_induk, tbl_khotimin.kode_santri) AS no_induk"),
                DB::raw("COALESCE(santri_detail.photo, tb_alumni_santri_detail.photo) AS photo"),
                DB::raw("COALESCE(santri_detail.photo_location, tb_alumni_santri_detail.photo_location, 0) AS photo_location"),
                DB::raw("COALESCE(tbl_khotimin.kelas, santri_detail.kelas, tb_alumni_santri_detail.kelas) AS kelas"),
                DB::raw("COALESCE(santri_detail.kecamatan, tb_alumni_santri_detail.kecamatan) AS kecamatan"),
                'tbl_khotimin.tanggal_khatam AS tanggal_khatam',
                'tbl_khotimin.keterangan AS keterangan',
                DB::raw("CASE 
                    WHEN tbl_khotimin.tipe_santri = 'santri' OR (santri_detail.id IS NOT NULL AND (santri_detail.status = 0 OR santri_detail.status IS NULL) AND santri_detail.deleted_at IS NULL) THEN 'Santri Aktif'
                    ELSE 'Alumni'
                END AS status_tipe"),
                DB::raw("COALESCE(YEAR(tbl_khotimin.tanggal_khatam), tb_alumni_santri_detail.khotmil_quran, tb_alumni_santri_detail.tahun_lulus) AS tahun_info")
            ]);

        $khotimin = DB::query()->fromSub($baseQuery, 'khotimin_combined')->orderBy('nama', 'asc')->get();

        foreach ($khotimin as $row) {
            if (!empty($row->nama)) {
                $row->nama = $this->rapikanNama($row->nama);
            }
            if (!empty($row->tanggal_khatam)) {
                try {
                    $row->tanggal_khatam_formatted = Carbon::parse($row->tanggal_khatam)->translatedFormat('d F Y');
                } catch (\Throwable $e) {
                    $row->tanggal_khatam_formatted = $row->tanggal_khatam;
                }
            } else {
                $row->tanggal_khatam_formatted = null;
            }
        }

        return view('alumni_khotimin', compact('khotimin'));
    }

    private function rapikanNama(string $nama): string
    {
        $nama = trim(preg_replace('/\s+/u', ' ', $nama));
        [$namaDepan, $gelar] = array_pad(explode(',', $nama, 2), 2, null);

        $hasil = mb_convert_case(trim($namaDepan), MB_CASE_TITLE, 'UTF-8');

        if ($gelar !== null && trim($gelar) !== '') {
            $hasil .= ', ' . preg_replace('/\.\s+(?=\p{L})/u', '.', trim($gelar));
        }

        return $hasil;
    }

}
