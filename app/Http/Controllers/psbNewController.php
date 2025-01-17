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
use App\Models\PsbBerkasPendukung;
use App\Models\PsbBuktiPembayaran;
use App\Models\TemplatePesan;
use App\Models\PsbSeragam;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Alert;
use Image;
use URL;
use PDF;
use helper;
use Illuminate\Validation\Rules\File;
use DateTime;

class psbNewController extends Controller
{
    //
    public $jenjang = array(1=>'TK','RA','SD/MI');
    public function data_pribadi(){
        $provinsi = Province::all();
        $username = session('psb_username');
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
            $kota = City::where(['id_provinsi'=>$psb_peserta->prov_id,'id_kota_kab'=>$psb_peserta->kota_id])->get();
        }
        $kecamatan = "";
        if(!empty($psb_peserta->kota_id) && !empty($psb_peserta->kecamatan)){
            $kecamatan = Kecamatan::where('id_provinsi',$psb_peserta->prov_id)->where("id_kota_kab",$psb_peserta->kota_id)->get();
        }
         $kecamatan = Kecamatan::where('id_provinsi',$psb_peserta->prov_id)->where("id_kota_kab",$psb_peserta->kota_id)->get();
        $kelurahan = "";
        if(!empty($psb_peserta->kota_id) && !empty($psb_peserta->kecamatan) && !empty($psb_peserta->kelurahan)){
            $kelurahan = Kelurahan::where('id_provinsi',$psb_peserta->prov_id)->where("id_kota_kab",$psb_peserta->kota_id)->where("id_kecamatan",$psb_peserta->kecamatan)->get();
        }

        $berkas = $berkas_pendukung->first();
        //Alert::success('', '');
        return view('psb/create2',compact('kecamatan','kelurahan','psb_seragam','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas'));
    }
    public function cetak_form(){
        $provinsi = '';
        $username = session('psb_username');
        $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$username)->first();
        $psb_wali = PsbWaliPesertum::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_asal = PsbSekolahAsal::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_seragam = PsbSeragam::where('psb_peserta_id',$psb_peserta->id)->first();
        $berkas_pendukung = PsbBerkasPendukung::where('psb_peserta_id',$psb_peserta->id);
        $foto = "https://payment.ppatq-rf.id/assets/images/user.png";
        if($berkas_pendukung->count() > 0 && !empty($berkas_pendukung->first()->file_photo)){
            $foto = URL::to('assets/images/upload/foto_casan/') . "/" .$berkas_pendukung->first()->file_photo;
        }
        $kota = [];
        $kecamatan = [];
        $kelurahan = [];


        $provinsi = Province::where('id_provinsi',$psb_peserta->prov_id)->first();
        if(!empty($psb_peserta->kota_id)){
            $kota = City::where(['id_provinsi' => $psb_peserta->prov_id, 'id_kota_kab'=>$psb_peserta->kota_id])->first();
        }
        if(!empty($psb_peserta->kecamatan)){
            $kecamatan = Kecamatan::where(['id_provinsi' => $psb_peserta->prov_id, 'id_kota_kab'=>$psb_peserta->kota_id, 'id_kecamatan'=>$psb_peserta->kecamatan])->first();
        }
        if(!empty($psb_peserta->kelurahan)){
            $kelurahan = Kelurahan::where(['id_provinsi' => $psb_peserta->prov_id, 'id_kota_kab'=>$psb_peserta->kota_id, 'id_kecamatan'=>$psb_peserta->kecamatan, 'id_kelurahan'=>$psb_peserta->kelurahan])->first();
        }

        $list_pendidikan = [1 => 'S2/S3','S1/D4','D1/D2/D3','SMA/SMK','SMP/MTS','SD/MI'];
        $jenjang = $this->jenjang;
        $berkas = $berkas_pendukung->first();
        $bukti = PsbBuktiPembayaran::where('psb_peserta_id',$psb_peserta->id)->first();
        $status_pembayaran = array('Belum Ada','Sedang Diproses Oleh Admin','Pembayaran Divalidasi');
        $user = UserPsb::where('no_pendaftaran',$username)->first();
        $tahun_lahir = date('Y', strtotime($psb_peserta->tanggal_lahir));
        $new_nama = substr($psb_peserta->nama,0,3);
        $tanggal = date('dm',strtotime($psb_peserta->tanggal_lahir));
        $password = $tahun_lahir . $new_nama . $tanggal;

        $bday = new DateTime($psb_peserta->tanggal_lahir); // Replace with the actual birth date
        $today = new DateTime('now'); // Getting the current date
        $diff = $today->diff($bday);
        $umur_bulan = $diff->m;
        $umur_tahun = $diff->y;
        //Alert::success('', '');
        // return view('psb/_form_cetak',compact('user','password','status_pembayaran','bukti','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas','jenjang','kelurahan','kecamatan'));
        $path = 'assets/formulir/';
        $pdf = PDF::loadView('psb/_form_cetak',compact('psb_seragam','user','password','status_pembayaran','bukti','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas','jenjang','kelurahan','kecamatan','list_pendidikan','umur_bulan','umur_tahun'));
        //$pdf->save('' . $path . 'DAFTAR_PPATQ_RF_' . $psb_peserta->nama . '_' . $psb_peserta->no_pendaftaran . '.pdf');
        return $pdf->stream('DAFTAR_PPATQ_RF_' . $psb_peserta->nama . '_' . $psb_peserta->no_pendaftaran . '.pdf');
    }
    public function save_pdf(){
        $provinsi = '';
        $no_pendaftaran = session('psb_username');
        $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$no_pendaftaran)->first();
        $psb_wali = PsbWaliPesertum::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_asal = PsbSekolahAsal::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_seragam = PsbSeragam::where('psb_peserta_id',$psb_peserta->id)->first();
        $berkas_pendukung = PsbBerkasPendukung::where('psb_peserta_id',$psb_peserta->id);
        $foto = "https://payment.ppatq-rf.id/assets/images/user.png";
        if($berkas_pendukung->count() > 0 && !empty($berkas_pendukung->first()->file_photo)){
            $foto = URL::to('assets/images/upload/foto_casan/') . "/" .$berkas_pendukung->first()->file_photo;
        }
        $kota = [];
        $kecamatan = [];
        $kelurahan = [];
        if(!empty($psb_peserta->prov_id)){

            $provinsi = Province::where('id_provinsi',$psb_peserta->prov_id)->first();
            if(!empty($psb_peserta->kota_id)){
                $kota = City::where(['id_provinsi' => $psb_peserta->prov_id, 'id_kota_kab'=>$psb_peserta->kota_id])->first();
            }
            if(!empty($psb_peserta->kecamatan)){
                $kecamatan = Kecamatan::where(['id_provinsi' => $psb_peserta->prov_id, 'id_kota_kab'=>$psb_peserta->kota_id, 'id_kecamatan'=>$psb_peserta->kecamatan])->first();
            }
            if(!empty($psb_peserta->kelurahan)){
                $kelurahan = Kelurahan::where(['id_provinsi' => $psb_peserta->prov_id, 'id_kota_kab'=>$psb_peserta->kota_id, 'id_kecamatan'=>$psb_peserta->kecamatan, 'id_kelurahan'=>$psb_peserta->kelurahan])->first();
            }
        }
        $list_pendidikan = [1 => 'S2/S3','S1/D4','D1/D2/D3','SMA/SMK','SMP/MTS','SD/MI'];
        $jenjang = $this->jenjang;
        $berkas = $berkas_pendukung->first();
        $bukti = PsbBuktiPembayaran::where('psb_peserta_id',$psb_peserta->id)->first();
        $status_pembayaran = array('Belum Ada','Sedang Diproses Oleh Admin','Pembayaran Divalidasi');
        $user = UserPsb::where('no_pendaftaran',$no_pendaftaran)->first();
        $tahun_lahir = date('Y', strtotime($psb_peserta->tanggal_lahir));
        $new_nama = substr($psb_peserta->nama,0,3);
        $tanggal = date('dm',strtotime($psb_peserta->tanggal_lahir));
        $password = $tahun_lahir . $new_nama . $tanggal;

        $bday = new DateTime($psb_peserta->tanggal_lahir); // Replace with the actual birth date
        $today = new DateTime('now'); // Getting the current date
        $diff = $today->diff($bday);
        $umur_bulan = $diff->m;
        $umur_tahun = $diff->y;
        //Alert::success('', '');
        // return view('psb/_form_cetak',compact('user','password','status_pembayaran','bukti','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas','jenjang','kelurahan','kecamatan'));
        $path = 'assets/formulir/';
        $pdf = PDF::loadView('psb/_form_cetak',compact('psb_seragam','user','password','status_pembayaran','bukti','provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas','jenjang','kelurahan','kecamatan','list_pendidikan','umur_bulan','umur_tahun'));
        if($pdf->save('' . $path . 'DAFTAR_PPATQ_RF_' . $psb_peserta->nama . '_' . $psb_peserta->no_pendaftaran . '.pdf')){
            echo "berhasil";
        }
        // $pdf->stream('DAFTAR_PPATQ_RF_' . $psb_peserta->nama . '_' . $psb_peserta->no_pendaftaran . '.pdf');
    }
    public function update_data_pribadi(Request $request){
        $id = $request->id;
        $data = PsbPesertaOnline::find($id);
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
        if($data->save()){
            $psb_wali_id = $request->psb_wali_id;
            $walsan = PsbWaliPesertum::find($psb_wali_id);
            $walsan->no_hp = $request->no_hp;
            $walsan->save();


            if (!empty($request->file('photos'))) {
                $photo = $request->file('photos');
                $filename = date('YmdHis') . $photo->getClientOriginalName();
                $kompres = Image::make($photo)
                  ->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                  })
                  ->save('assets/images/upload/foto_casan/' . $filename);
                if ($kompres) {
                  //$file = $request->file->store('public/assets/img/upload/photo');
                  $cek = PsbBerkasPendukung::where('psb_peserta_id',$id);
                  if($cek->count() > 0){
                    $cek = $cek->first();
                    $psbBerkasPendukung = PsbBerkasPendukung::find($cek->id);
                    $psbBerkasPendukung->file_photo = $filename;
                    $psbBerkasPendukung->save();

                  }else{
                    $psbBerkasPendukung = new PsbBerkasPendukung();
                    $psbBerkasPendukung->file_photo = $filename;
                    $psbBerkasPendukung->psb_peserta_id = $id;
                    $psbBerkasPendukung->save();
                  }
                    $array[] = [
                        'code' => 1,
                        'status' => 'Success',
                        'msg' => 'Data Berhasil Disimpan',
                        'photo'=>$filename,
                    ];
                    echo json_encode($array);
                }
            }else{
                $array[] = [
                    'code' => 1,
                    'status' => 'Success',
                    'msg' => 'Data Berhasil Disimpan'
                ];
                echo json_encode($array);
            }
        }else{
            $array[] = [
                'code' => 0,
                'status' => 'Error',
                'msg' => 'Data Gagal Disimpan'
            ];
            echo json_encode($array);
        }
    }
    public function update_data_walsan(Request $request){
        $psb_wali_id = $request->psb_wali_id;
        $walsan = PsbWaliPesertum::find($psb_wali_id);
        $walsan->nama_ayah = $request->nama_ayah;
        $walsan->nama_ibu = $request->nama_ibu;
        $walsan->pendidikan_ayah = $request->pendidikan_ayah;
        $walsan->pendidikan_ibu = $request->pendidikan_ibu;
        $walsan->pekerjaan_ayah = $request->pekerjaan_ayah;
        $walsan->pekerjaan_ibu = $request->pekerjaan_ibu;
        $walsan->alamat_ayah = $request->alamat_ayah;
        $walsan->alamat_ibu = $request->alamat_ibu;
        $walsan->no_telp = $request->no_telp;
        $walsan->no_hp = $request->no_hp;
        if($walsan->save()){
            $array[] = [
                'code' => 1,
                'status' => 'Success',
                'msg' => 'Data Berhasil Disimpan',
            ];
            echo json_encode($array);
        }else{
            $array[] = [
                'code' => 0,
                'status' => 'Error',
                'msg' => 'Data Gagal Disimpan'
            ];
            echo json_encode($array);
        }

    }
    public function update_data_asal_sekolah(Request $request){
        $id = $request->psb_asal_sekolah;
        $sekolahAsal = PsbSekolahAsal::find($id);
        $sekolahAsal->jenjang = $request->jenjang;
        $sekolahAsal->kelas = $request->kelas;
        $sekolahAsal->nama_sekolah = $request->nama_sekolah;
        $sekolahAsal->nss = $request->nss;
        $sekolahAsal->npsn = $request->npsn;
        $sekolahAsal->nisn = $request->nisn;
        if($sekolahAsal->save()){
            $seragam = PsbSeragam::find($request->psb_seragam);
            $seragam->berat_badan = $request->berat_badan;
            $seragam->tinggi_badan = $request->tinggi_badan;
            $seragam->lingkar_dada = $request->lingkar_dada;
            $seragam->lingkar_pinggul = $request->lingkar_pinggul;
            $seragam->save();
            $array[] = [
                'code' => 1,
                'status' => 'Success',
                'msg' => 'Data Berhasil Disimpan',
            ];
            echo json_encode($array);
        }else{
            $array[] = [
                'code' => 0,
                'status' => 'Error',
                'msg' => 'Data Gagal Disimpan'
            ];
            echo json_encode($array);
        }
    }
    public function update_data_berkas(Request $request){
        $id = $request->id;
        $request->validate([
            'photo' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(50 * 1024)],
            'kk' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(50 * 1024)],
            'ktp' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(50 * 1024)],
            'rapor' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(50 * 1024)],
        ]);
        $nama_file = array('photo','kk','ktp','rapor');
        $array = array();
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
                    }else{
                        $kompres = Image::make($file)
                        ->resize(800, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })
                        ->save('assets/images/upload/file_' . $value . '/' . $filename);
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
                $array[] = [
                    'code' => 1,
                    'status' => 'Success',
                    'msg' => 'Data Berhasil Disimpan',
                    'location' => $value,
                    'ekstensi' => strtolower($ekstensi),
                    'photo'=>$filename,
                ];

            }
        }
        echo json_encode($array);
    }
    public function upload_bukti_pembayaran(){
        $username = session('psb_username');
        $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$username)->first();
        $bukti_bayar = 0;
        $psb_bukti_bayar = PsbBuktiPembayaran::where('psb_peserta_id',$psb_peserta->id);
        if($psb_bukti_bayar->count() > 0 ){
            $bukti_bayar = $psb_bukti_bayar->first()->status;
        }
        return view('psb/bukti_pembayaran',compact('username','psb_peserta','bukti_bayar'));
    }
    public function simpan_bukti_bayar(Request $request){
        $id = $request->id;
        $request->validate([
            'bukti' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(50 * 1024)],
        ]);
        $nama_file = array('bukti');
        $array = array();
        foreach($nama_file as $value){
            if($request->file($value)){
                $file = $request->file($value);
                $ekstensi = $file->extension();
                if(strtolower($ekstensi) == 'jpg' || strtolower($ekstensi) == 'png' || strtolower($ekstensi) == 'jpeg'){
                    $filename = date('YmdHis') . $file->getClientOriginalName();
                    $kompres = Image::make($file)
                    ->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save('assets/images/upload/file_' . $value . '/' . $filename);
                }else{
                    $filename = date('YmdHis') . $file->getClientOriginalName();
                    $file->move('assets/images/upload/file_' . $value . '/',$filename);
                }
                //$cek = PsbBerkasPendukung::where('psb_peserta_id',$id);
                $bukti = new PsbBuktiPembayaran();
                $bukti->psb_peserta_id = $request->id;
                $bukti->atas_nama = $request->atas_nama;
                $bukti->bank = $request->bank_pengirim;
                $bukti->no_rekening = $request->no_rekening;
                $bukti->bukti = $filename;
                $bukti->status = 1;
                if($bukti->save()){
                    $peserta = PsbPesertaOnline::find($request->id);
                    $pesan = "------ PSB.PPATQ-RF.ID----

*Pesan ini dikirim dari sistem PSB PPATQ-RF*

Kepada Calon Santri Baru
atas nama : " . $peserta->nama . "
no pendaftaran : " . $peserta->no_pendaftaran . "

Pembayaran kamu untuk pendaftaran santri baru Pondok Pesantren Anak Tahfidzul Qur'an Raudlatul Falah  sebesar Rp 300.000 melalui bank " . $request->bank_pengirim . " atas nama " . $request->atas_nama . " telah kami terima pada " . date('d-m-Y H:i:s') . "

Silahkan tunggu beberapa saat, admin kami akan memverifikasi pembayaran anda.


terimakasih";
                    $walsan = PsbWaliPesertum::where('psb_peserta_id',$request->id)->first();
                    $data['no_wa'] = $walsan->no_hp;
                    $data['pesan'] = $pesan;

                    helper::send_wa($data);
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

Status Biaya Pendaftaran
{
ADA LAPORAN PEMBAYARAN
PEMBAYARAN BELUM DIVALIDASI
}

username : ' . $username .'
password : ' . $password . '

Keterangan : Pelaporan Pembayaran Pendaftaran Santri Baru
status : Menunggu Validasi Pembayaran



https://psb.ppatq-rf.id';
                //pake $data2 soalnya sudah di pake untuk send wa di bawah
                //$no_pengurus = ['08979194645','089601087437','082298576026','089668309013'];
                $no_pengurus = ['082298576026','089668309013'];
                //$no_pengurus = ['082326248982'];
                foreach($no_pengurus as $value){
                    $data['no_wa'] = $value;
                    $data['pesan'] = $pesan2;

                    helper::send_wa($data);
                }
                    $array[] = [
                        'code' => 1,
                        'status' => 'Success',
                        'msg' => 'Data Berhasil Disimpan',
                        // 'location' => $value,
                        // 'ekstensi' => strtolower($ekstensi),
                        'photo'=>$filename,
                    ];
                }else{
                    $array[] = [
                        'code' => 0,
                        'status' => 'error',
                        'msg' => 'Data Gagal Disimpan',
                    ];
                }

            }else{
                $array[] = [
                    'code' => 0,
                    'status' => 'error',
                    'msg' => 'Data Gagal Disimpan | File Bukti Pembayaran harap diisi',
                ];
            }
        }
        echo json_encode($array);
    }
    public function simpan_bukti_bayar_api_admin(Request $request){

        $id = $request->id;
        $request->validate([
            'bukti' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(50 * 1024)],
        ]);
        $nama_file = array('bukti');
        $array = array();
        $filename = "";
        foreach($nama_file as $value){
            if($request->file($value)){
                $file = $request->file($value);
                $ekstensi = $file->extension();
                if(strtolower($ekstensi) == 'jpg' || strtolower($ekstensi) == 'png' || strtolower($ekstensi) == 'jpeg'){
                    $filename = date('YmdHis') . $file->getClientOriginalName();
                    $kompres = Image::make($file)
                    ->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save('assets/images/upload/file_' . $value . '/' . $filename);
                }else{
                    $filename = date('YmdHis') . $file->getClientOriginalName();
                    $file->move('assets/images/upload/file_' . $value . '/',$filename);
                }
            }
        }

        if ($id) {
            // update the value
            if($request->file($value)){
                $PsbBuktiPembayaran = PsbBuktiPembayaran::updateOrCreate(
                    ['id' => $id],
                    [
                    'bank' => $request->bank,
                    'no_rekening' => $request->no_rekening,
                    'atas_nama' => $request->atas_nama,
                    'status' => $request->status,
                    'psb_peserta_id' => $request->psb_peserta_id,
                    'bukti' => $filename,
                    ]
                );
            }else{
                $PsbBuktiPembayaran = PsbBuktiPembayaran::updateOrCreate(
                    ['id' => $id],
                    [
                    'bank' => $request->bank,
                    'no_rekening' => $request->no_rekening,
                    'atas_nama' => $request->atas_nama,
                    'status' => $request->status,
                    'psb_peserta_id' => $request->psb_peserta_id
                    ]
                );
            }
            $peserta = PsbPesertaOnline::where('id', $request->psb_peserta_id)->first();
            $psb_peserta = PsbPesertaOnline::find($request->psb_peserta_id);
            $psb_peserta->status = $request->status;
            $pesan = '';
            if($request->status == "2"){
                $psb_peserta->tanggal_validasi = strtotime(date('Y-m-d H:i:s'));
                $pecah = explode('.', $peserta->no_pendaftaran);
                $no_test = $pecah[2];
                $psb_peserta->no_test = $no_test;
                $psb_peserta->save();


                $walisan = PsbWaliPesertum::where('psb_peserta_id', $request->psb_peserta_id)->first();
                $user = UserPsb::where('username', $peserta->no_pendaftaran)->first();
                $template_pesan = TemplatePesan::where('status', 1)->first();

                $pesan = str_replace('{{nama}}', $peserta->nama, $template_pesan->pesan);
                $pesan = str_replace('{{tanggal_validasi}}', date('Y-m-d H:i:s', $peserta->tanggal_validasi), $pesan);
                $pesan = str_replace('{{no_test}}', $no_test, $pesan);
                $pesan = str_replace('{{username}}', $user->username, $pesan);
                $pesan = str_replace('{{password}}', $user->password_ori, $pesan);
                $pesan = str_replace('{{nama_ayah}}', $walisan->nama_ayah, $pesan);
                $pesan = str_replace('{{nama_ibu}}', $walisan->nama_ibu, $pesan);

                $data['no_wa'] = $walisan->no_hp;
                $data['pesan'] = $pesan;

                $pesan = helper::send_wa($data);

                 //cc ke pengurus
                $data['no_wa'] = '082298576026';
                $data['pesan'] = $pesan;

                helper::send_wa($data);
            }else{
                $psb_peserta->save();
            }
            // user updated
            $array = ['status' => "Berhasil Update", "Code" => 1, "pesan" =>$pesan];
            return json_encode($array);
        } else {
        // create new one if email is unique
        //$userEmail = User::where('email', $request->email)->first();
        if($request->file($value)){
            $PsbBuktiPembayaran = PsbBuktiPembayaran::updateOrCreate(
                ['id' => $id],
                [
                'bank' => $request->bank,
                'no_rekening' => $request->no_rekening,
                'atas_nama' => $request->atas_nama,
                'status' => $request->status,
                'psb_peserta_id' => $request->psb_peserta_id,
                'bukti' => $filename,
                ]
            );
        }else{
            $PsbBuktiPembayaran = PsbBuktiPembayaran::updateOrCreate(
                ['id' => $id],
                [
                'bank' => $request->bank,
                'no_rekening' => $request->no_rekening,
                'atas_nama' => $request->atas_nama,
                'status' => $request->status,
                'psb_peserta_id' => $request->psb_peserta_id,
                ]
            );
        }
        $peserta = PsbPesertaOnline::where('id', $request->psb_peserta_id)->first();

        $psb_peserta = PsbPesertaOnline::find($request->psb_peserta_id);
        $psb_peserta->status = $request->status;
        if($request->status == "2"){
            $psb_peserta->tanggal_validasi = strtotime(date('Y-m-d H:i:s'));
            $pecah = explode('.', $peserta->no_pendaftaran);
            $no_test = $pecah[2];
            $psb_peserta->no_test = $no_test;
            $psb_peserta->save();

            $walisan = PsbWaliPesertum::where('psb_peserta_id', $request->psb_peserta_id)->first();
            $user = UserPsb::where('username', $peserta->no_pendaftaran)->first();
            $template_pesan = TemplatePesan::where('status', 1)->first();

            $pesan = str_replace('{{nama}}', $peserta->nama, $template_pesan->pesan);
            $pesan = str_replace('{{tanggal_validasi}}', date('Y-m-d H:i:s', $peserta->tanggal_validasi), $pesan);
            $pesan = str_replace('{{no_test}}', $no_test, $pesan);
            $pesan = str_replace('{{username}}', $user->username, $pesan);
            $pesan = str_replace('{{password}}', $user->password_ori, $pesan);
            $pesan = str_replace('{{nama_ayah}}', $walisan->nama_ayah, $pesan);
            $pesan = str_replace('{{nama_ibu}}', $walisan->nama_ibu, $pesan);

            $data['no_wa'] = $walisan->no_hp;
            $data['pesan'] = $pesan;

            helper::send_wa($data);
            //cc ke pengurus
            $data['no_wa'] = '082298576026';
            $data['pesan'] = $pesan;

            helper::send_wa($data);

        }else{
            $psb_peserta->save();
        }

        if ($PsbBuktiPembayaran) {
            // user created
            //return response()->json('Created');
            $array = ['status' => "Berhasil Simpan", "Code" => 1];
            return json_encode($array);
        } else {
            $array = ['status' => "Gagal Simpan", "Code" => 2];
            return json_encode($array);
        }
        }


    }
}
