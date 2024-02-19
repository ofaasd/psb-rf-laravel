<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\PsbPesertaOnline;
use App\Models\PsbWaliPesertum;
use App\Models\PsbSekolahAsal;
use App\Models\UserPsb;
use App\Models\PsbGelombang;
use App\Models\PsbSeragam;
use App\Models\PsbBerkasPendukung;
use App\Models\PsbBuktiPembayaran;
use Illuminate\Support\Facades\DB;
use DateTime;
use helper;
use Image;
use URL;
use PDF;
use Illuminate\Validation\Rules\File;

class psbController extends Controller
{
    //
    public $jenjang = array(1=>'TK','RA','SD/MI');
    public function index(){
        $psb = PsbPesertaOnline::all();
        $photo = [];
        $kota = [];
        $provinsi = [];
        foreach($psb as $row){
            $berkas_pendukung = PsbBerkasPendukung::where('psb_peserta_id',$row->id);
            if($berkas_pendukung->count() > 0){
                $photo[$row->id] = URL::to('assets/images/upload/foto_casan/') . "/" .$berkas_pendukung->first()->file_photo;
            }else{
                $photo[$row->id] = "https://payment.ppatq-rf.id/assets/images/user.png";
            }
            $kota[$row->id] = Province::where('id_provinsi',$row->prov_id)->first()->nama_provinsi ?? '';
            $provinsi[$row->id] = City::where('id_provinsi',$row->prov_id)->where('id_kota_kab',$row->kota_id)->first()->nama_kota_kab ?? '';
        }
        $status = array(0=>'Belum Diverifikasi',1=>'Sudah Diverifikasi');
        $status_ujian = array(0=>'Belum Ujian', 1=>'Lulus',2=>'Tidak Lulus');
        $status_diterima = array(0=>'Dalam Proses',1=>'Diterima',2=>'Tidak Diterima');
        return view('psb/index',compact('psb','kota','provinsi','photo','status','status_ujian','status_diterima'));
    }
    public function create(){
        $provinsi = Province::all();
        $gelombang = PsbGelombang::where('pmb_online', 1)->get();
        $jumlah_gelombang = PsbGelombang::where('pmb_online', 1)->count();
        return view('psb/create',compact('provinsi','gelombang','jumlah_gelombang'));
    }
    public function get_kota(Request $request){
        $id = $request->prov_id;
        $get_kota = City::where('id_provinsi',$id)->get();
        echo json_encode($get_kota);
    }
    public function get_kecamatan(Request $request){
        $id_provinsi = $request->prov_id;
        $id_kota = $request->kota_id;
        $get_kecamatan = Kecamatan::where('id_provinsi',$id_provinsi)->where('id_kota_kab',$id_kota)->get();
        echo json_encode($get_kecamatan);
    }
    public function get_kelurahan(Request $request){
        $id_provinsi = $request->prov_id;
        $id_kota = $request->kota_id;
        $id_kecamatan = $request->kecamatan_id;
        $get_kelurahan = Kelurahan::where('id_provinsi',$id_provinsi)->where('id_kota_kab',$id_kota)->where('id_kecamatan',$id_kecamatan)->get();
        echo json_encode($get_kelurahan);
    }
    public function validation(Request $request){
        $no_hp = $request->no_hp;
        //cek no_hp sudah terdaftar pada sistem
        $array = array();
        $cek_hp = UserPsb::where('no_hp',$no_hp)->count();
        $hitung = 0;
        // if($cek_hp > 0 ){
        //     $array[] = [
        //         'code' => 1,
        //         'status' => 'error',
        //         'msg' => 'No. HP sudah terdaftar pada sistem'
        //     ];
        //     //echo json_encode($array);
        //     $hitung++;
        // }
        //cek umur peserta > 5 dan  < 12 tahun
        $tanggal_lahir = $request->tanggal_lahir;
        $tempat_lahir = $request->tempat_lahir;
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
                'msg' => 'Usia minimal 5 tahun dan maksimal 12 tahun | Usia Saat ini : ' . $year
            ];
            //echo json_encode($array);
            $hitung++;
        }

        $nama = $request->nama;
        $int_tanggal_lahir = strtotime($tanggal_lahir);
        $peserta = PsbPesertaOnline::where(['nama'=>$nama,'tempat_lahir'=>$tempat_lahir,'tanggal_lahir'=>$int_tanggal_lahir])->count();
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
        $data_wa = [];
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
            $user->password_ori = $password;
            $user->password = md5($password);

            if($user->save()){
                //kirim pesan wa disini
                $pesan = "*Pesan ini dikirim dari sistem PSB PPATQ-RF*

Selamat
nama : " . $nama . "
no pendaftaran : " . $username . "

telah terdaftar pada web sebagai peserta test seleksi  Peserta Didik Baru PPATQ Radlatul Falah Pati

Silahkan catat username dan password di bawah ini untuk dapat mengubah dan melengkapi data

username : " . $username . "
password : " . $password . "

Selanjutnya anda dapat melakukan pengkinian data calon santri baru di menu PSB setelah login melalui sistem
https://psb.ppatq-rf.id

terimakasih


#simpanWA_ini";
                $data_wa['no_wa'] = $request->no_hp;
                $data_wa['pesan'] = $pesan;


                $kk = "Tidak Ada";
                $ktp = "Tidak Ada";
                $rapor = "Tidak Ada";
                $photo = "Tidak Ada";
                if($request->file('kk')){
                    $kk = "Ada";
                }
                if($request->file('ktp')){
                    $ktp = "Ada";
                }
                if($request->file('rapor')){
                    $rapor = "Ada";
                }
                if($request->file('photo')){
                    $photo = "Ada";
                }


                $ayah = $request->nama_ayah ?? '';
                $kota = City::find($request->kota)->city_name ?? '';
                $pesan2 = 'Pesan dari sistem PSB PPATQ-RF
https://psb.ppatq-rf.id

Telah terdaftar
Calon santri a/n : ' . $request->nama . '
Wali santri a/n : ' . $ayah  . '
dari kota : ' . $kota . '

status kelengkapan
' . $kk . ' KK
' . $rapor . ' Raport
' . $photo . ' Foto
' . $ktp . ' KTP


username : ' . $username .'
password : ' . $password . '

status : menunggu jadwal test & wawancara



https://psb.ppatq-rf.id';
                //pake $data2 soalnya sudah di pake untuk send wa di bawah
                // $no_pengurus = ['08979194645','089601087437','082298576026','089668309013'];
                // foreach($no_pengurus as $value){
                //     $data['no_wa'] = $value;
                //     $data['pesan'] = $pesan2;

                //     helper::send_wa($data);
                // }

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
            $data->gelombang_id = $request->gelombang_id;
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
                $walsan->alamat_ayah = $request->alamat;
                $walsan->alamat_ibu = $request->alamat;
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

                $seragam = new PsbSeragam();
                $seragam->psb_peserta_id = $data->id;
                $seragam->berat_badan = $request->berat_badan;
                $seragam->tinggi_badan = $request->tinggi_badan;
                $seragam->lingkar_dada = $request->lingkar_dada;
                $seragam->lingkar_pinggul = $request->lingkar_pinggul;
                $seragam->save();
                $id = $data->id;
                $request->validate([
                    'photo' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
                    'kk' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
                    'ktp' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
                    'rapor' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
                ]);
                $nama_file = array('photo','kk','ktp','rapor');
                $array = array();
                $upload = 0;
                foreach($nama_file as $value){
                    if($request->file($value)){
                        $file = $request->file($value);
                        $ekstensi = $file->extension();
                        if(strtolower($ekstensi) == 'jpg' || strtolower($ekstensi) == 'png' || strtolower($ekstensi) == 'jpeg'){
                            $filename = date('YmdHis') . $file->getClientOriginalName();
                            if($value == 'photo'){
                                $kompres = Image::make($file)
                                ->resize(800, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                })
                                ->save('assets/images/upload/foto_casan/' . $filename);
                                $upload++;
                            }else{
                                $kompres = Image::make($file)
                                ->resize(800, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                })
                                ->save('assets/images/upload/file_' . $value . '/' . $filename);
                                $upload++;
                            }
                        }else{
                            if($value == 'photo'){
                                $filename = date('YmdHis') . $file->getClientOriginalName();
                            $file->move('assets/images/upload/foto_casan/',$filename);
                            }else{
                                $filename = date('YmdHis') . $file->getClientOriginalName();
                                $file->move('assets/images/upload/file_' . $value . '/',$filename);
                            }

                        }
                        $cek = PsbBerkasPendukung::where('psb_peserta_id',$id);
                        if($cek->count() > 0){
                            $cek = $cek->first();
                            $psbBerkasPendukung = PsbBerkasPendukung::find($cek->id);
                            if($value == "kk"){
                                $psbBerkasPendukung->file_kk = $filename;
                            }elseif($value == 'ktp' ){
                                $psbBerkasPendukung->file_ktp = $filename;
                            }elseif($value == 'rapor'){
                                $psbBerkasPendukung->file_rapor = $filename;
                            }elseif($value == 'photo'){
                                $psbBerkasPendukung->file_photo = $filename;
                            }
                            $psbBerkasPendukung->save();

                        }else{
                            $psbBerkasPendukung = new PsbBerkasPendukung();
                            if($value == "kk"){
                                $psbBerkasPendukung->file_kk = $filename;
                            }elseif($value == 'ktp' ){
                                $psbBerkasPendukung->file_ktp = $filename;
                            }elseif($value == 'rapor'){
                                $psbBerkasPendukung->file_rapor = $filename;
                            }elseif($value == 'photo'){
                                $psbBerkasPendukung->file_photo = $filename;
                            }
                            $psbBerkasPendukung->psb_peserta_id = $id;
                            $psbBerkasPendukung->save();
                        }
                    }
                }
                $wa = '';
                $this->save_file_cetak($username);
                $data_wa['file'] = URL::to('/assets/formulir/' . 'DAFTAR_PPATQ_RF_' . $request->nama . '_' . $username . '.pdf');
                // $wa = helper::send_wa_file($data_wa);
                // $w2 = helper::send_wa($data_wa);

                // if(!empty($data_wa)){
                //     if($this->save_file_cetak($username)){
                //         $data_wa['file'] = URL::to('/assets/formulir/' . 'Form_Pendaftaran_' . $username . '.pdf');
                //         $wa = helper::send_wa_file($data_wa);
                //     }else{
                //         $wa = helper::send_wa($data_wa);
                //     }
                // }
                // if($this->save_file_cetak($username)){
                //     $wa = helper::send_wa($data_wa);
                // }
                $array[] = [
                    'code' => 0,
                    'status' => 'Success',
                    'username' => $username,
                    'password' => $password,
                    'no_wa' => $data_wa['no_wa'],
                    'pesan' => $data_wa['pesan'],
                    'msg' => '',
                    'wa' => $wa,
                    'url_file' =>$data_wa['file'],
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
    public function save_file_cetak($username){
        $provinsi = '';
        $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$username)->first();
        $psb_wali = PsbWaliPesertum::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_asal = PsbSekolahAsal::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_seragam = PsbSeragam::where('psb_peserta_id',$psb_peserta->id)->first();
        $berkas_pendukung = PsbBerkasPendukung::where('psb_peserta_id',$psb_peserta->id);
        $foto = "https://payment.ppatq-rf.id/assets/images/user.png";
        if($berkas_pendukung->count() > 0 && !empty($berkas_pendukung->first()->file_photo)){
            $foto = URL::to('assets/images/upload/foto_casan/') . "/" .$berkas_pendukung->first()->file_photo;
        }
        $kota = "";
        if(!empty($psb_peserta->prov_id)){

            $provinsi = Province::where("id_provinsi",$psb_peserta->prov_id)->first();
            if(!empty($psb_peserta->kota_id)){
                $kota = City::where("id_provinsi",$psb_peserta->prov_id)->where("id_kota_kab",$psb_peserta->kota_id)->first();

            }
        }
        $jenjang = $this->jenjang;
        $berkas = $berkas_pendukung->first();
        $bukti = PsbBuktiPembayaran::where('psb_peserta_id',$psb_peserta->id)->first();
        $status_pembayaran = array('Belum Ada','Sedang Diproses Oleh Admin','Pembayaran Divalidasi');
        $user = UserPsb::where('username',$username)->first();
        $tahun_lahir = date('Y', strtotime($psb_peserta->tanggal_lahir));
        $new_nama = substr($psb_peserta->nama,0,3);
        $tanggal = date('dm',strtotime($psb_peserta->tanggal_lahir));
        $password = $tahun_lahir . $new_nama . $tanggal;
        //Alert::success('', '');
        // return view('psb/_form_cetak',compact('user','password','status_pembayaran','bukti','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas','jenjang'));
        $path = 'assets/formulir/';
        $pdf = PDF::loadView('psb/_form_cetak',compact('psb_seragam','user','password','status_pembayaran','bukti','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas','jenjang'));
        return $pdf->save('' . $path . 'DAFTAR_PPATQ_RF_' . $psb_peserta->nama . '_' . $username . '.pdf');
    }
    public function send_wa_file(Request $request){
        $data['no_wa'] = $request->no_wa;
        $data['pesan'] = $request->pesan;
        $data['file'] = $request->file;

        $testingHelper = helper::send_wa($data);
        if(!empty($testingHelper)){
            //$wa_file = helper::send_wa_file($data);
            $username = $request->username;
            $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$username)->first();
            $update_peserta = PsbPesertaOnline::find($psb_peserta->id);
            $update_peserta->status_wa = 1;
            if($update_peserta->save()){
                echo $testingHelper;
            }else{
                echo "gagal";
            }

            // if(!empty($wa_file)){
            //     $username = $request->username;
            //     $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$username)->first();
            //     $update_peserta = PsbPesertaOnline::find($psb_peserta->id);
            //     $update_peserta->status_wa = 2;
            //     if($update_peserta->save()){
            //         echo $testingHelper;
            //     }else{
            //         echo "gagal";
            //     }
            // }
        }

    }
}
