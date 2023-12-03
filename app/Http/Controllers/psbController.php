<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;
use App\Models\PsbPesertaOnline;
use App\Models\PsbWaliPesertum;
use App\Models\PsbSekolahAsal;
use App\Models\UserPsb;
use App\Models\PsbGelombang;

use Illuminate\Support\Facades\DB;
use DateTime;
use helper;

class psbController extends Controller
{
    //
    public function index(){
        $psb = PsbPesertaOnline::all();
        $status = array(0=>'Belum Diverifikasi',1=>'Sudah Diverifikasi');
        $status_ujian = array(0=>'Belum Ujian', 1=>'Lulus',2=>'Tidak Lulus');
        $status_diterima = array(0=>'Dalam Proses',1=>'Diterima',2=>'Tidak Diterima');
        return view('psb/index',compact('psb','status','status_ujian','status_diterima'));
    }
    public function create(){
        $provinsi = Province::all();
        return view('psb/create',compact('provinsi'));
    }
    public function get_kota(Request $request){
        $id = $request->prov_id;
        $get_kota = City::where('prov_id',$id)->get();
        echo json_encode($get_kota);
    }
    public function validation(Request $request){
        $no_hp = $request->no_hp;
        //cek no_hp sudah terdaftar pada sistem
        $array = array();
        $cek_hp = UserPsb::where('no_hp',$no_hp)->count();
        $hitung = 0;
        if($cek_hp > 0 ){
            $array[] = [
                'code' => 1,
                'status' => 'error',
                'msg' => 'No. HP sudah terdaftar pada sistem'
            ];
            //echo json_encode($array);
            $hitung++;
        }
        //cek umur peserta > 5 dan  < 12 tahun
        $tanggal_lahir = $request->tanggal_lahir;
        $dob = new DateTime($tanggal_lahir);
        $today   = new DateTime('today');
        $year = $dob->diff($today)->y;
        $month = $dob->diff($today)->m;
        $day = $dob->diff($today)->d;
        //echo "Age is"." ".$year."year"." ",$month."months"." ".$day."days";
        if($year < 5 || $year >= 13){
            $array[] = [
                'code' => 2,
                'status' => 'error',
                'msg' => 'Usia minimal 5 tahun dan maksimal 12 tahun'
            ];
            //echo json_encode($array);
            $hitung++;
        }

        $nama = $request->nama;
        $peserta = PsbPesertaOnline::where(array('nama'=>$nama,'tanggal_lahir'=>$tanggal_lahir))->count();
        if($peserta > 0){
            $array[] = [
                'code' => 3,
                'status' => 'error',
                'msg' => 'Calon Santri sudah pernah di daftarkan mohon jika lupa password silahkan melakukan prosedur lupa password atau menghubungi pihak Call Center PSB '
            ];
            //echo json_encode($array);
            $hitung++;
        }
        if($hitung > 0){
            echo json_encode($array);
        }else{
            $array[] = [
                'code' => 0,
                'status' => 'success',
                'msg' => ''
            ];
            echo json_encode($array);
        }
    }
    public function store(Request $request){
        $gelombang = PsbGelombang::where('pmb_online', 1)->first();
        $user = new UserPsb();
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->tanggal_lahir = strtotime($request->tanggal_lahir);
        $user->alamat = $request->alamat;
        $user->prov_id = $request->provinsi;
        $user->city_id = $request->kota;
        $user->kecamatan = $request->kecamatan;
        $user->kelurahan = $request->kelurahan;
        $user->kode_pos = $request->kode_pos;
        $user->no_hp = $request->no_hp;
        $username = '';
        if($user->save()){
            $nama = $request->nama;
            $tgl_lahir = $request->tanggal_lahir;
            $id = $user->id;
            $new_user = UserPsb::find($id);
            $str_id = "";
            if(strlen($id) == 1){
                $str_id = "00" . $id;
            }elseif(strlen($id) == 2){
                $str_id = "0" . $id;
            }else{
                $str_id = (str)($id);
            }
            $tahun_lahir = date('Y', strtotime($tgl_lahir));
            $new_nama = substr($nama,0,3);
            $tanggal = date('dm',strtotime($tgl_lahir));

            //create username and password
            $username = "RF.ppatq." . $str_id . "." . date('y');
            $password = $tahun_lahir . $new_nama . $tanggal;

            $user->username = $username;
            $user->password = md5($password);
            if($user->save()){
                //kirim pesan wa disini
                $pesan = '*Pesan ini dikirim dari sistem*

Selamat anda sudah terdaftar pada web Penerimaan Peserta Didik Baru PPATQ Radlatul Falah Pati
Silahkan catat username dan password di bawah ini untuk dapat mengubah dan melengkapi data
username : ' . $username . '
password : ' . $password . '
Selanjutnya anda dapat melakukan pengkinian data calon santri baru di menu PSB setelah login melalui sistem
https://psb.ppatq-rf.id';
                $data['no_wa'] = $request->no_hp;
                $data['pesan'] = $pesan;

                helper::send_wa($data);
            }

            $data = new PsbPesertaOnline();
            $data->nik = $request->nik;
            $data->nama = $request->nama;
            $data->nama_panggilan = $request->nama_panggilan;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = strtotime($request->tanggal_lahir);
            $data->usia_bulan = $request->usia_bulan;
            $data->usia_tahun = $request->usia_tahun;
            $data->jumlah_saudara = $request->jumlah_saudara;
            $data->anak_ke = $request->anak_ke;
            $data->alamat = $request->alamat;
            $data->prov_id = $request->provinsi;
            $data->kota_id = $request->kota;
            $data->kecamatan = $request->kecamatan;
            $data->kelurahan = $request->kelurahan;
            $data->kode_pos = $request->kode_pos;
            $data->gelombang_id = $gelombang->id;
            $data->no_pendaftaran = $username;
            $data->user_id = $id;
            if ($data->save()) {
                $walsan = new PsbWaliPesertum();
                $walsan->nama_ayah = $request->nama_ayah;
                $walsan->nama_ibu = $request->nama_ibu;
                $walsan->pendidikan_ayah = $request->pendidikan_ayah;
                $walsan->pendidikan_ibu = $request->pendidikan_ibu;
                $walsan->pekerjaan_ayah = $request->pekerjaan_ayah;
                $walsan->pekerjaan_ibu = $request->pekerjaan_ibu;
                $walsan->alamat_ayah = $request->alamat_ayah;
                $walsan->alamat_ibu = $request->alamat_ibu;
                $walsan->no_hp = $request->no_hp;
                $walsan->no_telp = $request->no_telp;
                $walsan->psb_peserta_id = $data->id;
                $walsan->save();

                $sekolahAsal = new PsbSekolahAsal();
                $sekolahAsal->jenjang = $request->jenjang;
                $sekolahAsal->kelas = $request->kelas;
                $sekolahAsal->nama_sekolah = $request->nama_sekolah;
                $sekolahAsal->nss = $request->nss;
                $sekolahAsal->npsn = $request->npsn;
                $sekolahAsal->nisn = $request->nisn;
                $sekolahAsal->psb_peserta_id = $data->id;
                $sekolahAsal->save();

                $array[] = [
                    'code' => 0,
                    'status' => 'Success',
                    'username' => $username,
                    'password' => $password,
                    'msg' => ''
                ];
                echo json_encode($array);
            }else{
                $array[] = [
                    'code' => 1,
                    'status' => 'Error',
                    'msg' => ''
                ];
                echo json_encode($array);
            }
        }
    }
    public function send_wa(){
        $testingHelper = helper::testing();
        echo $testingHelper;

    }
}