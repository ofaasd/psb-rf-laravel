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
use Alert;
use Image;
use URL;
use Illuminate\Validation\Rules\File;

class psbNewController extends Controller
{
    //

    public function data_pribadi(){
        $provinsi = Province::all();
        $username = session('psb_username');
        $psb_peserta = PsbPesertaOnline::where('no_pendaftaran',$username)->first();
        $psb_wali = PsbWaliPesertum::where('psb_peserta_id',$psb_peserta->id)->first();
        $psb_asal = PsbSekolahAsal::where('psb_peserta_id',$psb_peserta->id)->first();
        $berkas_pendukung = PsbBerkasPendukung::where('psb_peserta_id',$psb_peserta->id);
        $foto = "https://payment.ppatq-rf.id/assets/images/user.png";
        if($berkas_pendukung->count() > 0 && !empty($berkas_pendukung->first()->file_photo)){
            $foto = URL::to('assets/images/upload/foto_casan/') . "/" .$berkas_pendukung->first()->file_photo;
        }
        $kota = "";
        if(!empty($psb_peserta->prov_id)){
            $kota = City::where('prov_id',$psb_peserta->prov_id)->get();
        }
        $berkas = $berkas_pendukung->first();
        //Alert::success('', '');
        return view('psb/create2',compact('provinsi','psb_peserta','psb_wali','psb_asal','kota','foto','berkas'));
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
        $data->user_id = $id;
        if($data->save()){
            $psb_wali_id = $request->psb_wali_id;
            $walsan = PsbWaliPesertum::find($psb_wali_id);
            $walsan->no_hp = $request->no_hp;
            $walsan->save();


            if ($request->file('photos')) {
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
            'kk' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
            'ktp' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
            'rapor' => [File::types(['jpg', 'jpeg', 'png', 'pdf'])->max(10 * 1024)],
        ]);
        $nama_file = array('kk','ktp','rapor');
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
}
