<?php

namespace App\Http\Controllers;
use App\Models\UserPsb;
use App\Models\PsbPesertaOnline;
use URL;
use helper;

use Illuminate\Http\Request;

class AuthPsbController extends Controller
{
    //
    public function login(){
        return view('auth/login');
    }
    public function forgot_password(){
        return view('auth/forgot');
    }

    public function proses_login( Request $request ){
        $username = $request->username;
        $password = md5($request->password);

        $user = UserPsb::where(array('username'=>$username,'password'=>$password));

        if($user->count() > 0){
            $request->session()->put('psb_username', $username);
            $request->session()->put('psb_id',$user->first()->id);
            return redirect('psb/data_pribadi');
        }else{
            $request->session()->flash('error', 'Username atau Password Salah');
            return redirect('login');
        }

    }
    public function proses_forget(Request $request){
        $nama = $request->nama;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $no_hp = $request->no_hp;
        $psb_peserta = PsbPesertaOnline::whereRaw('LOWER(`nama`) LIKE ? ', [strtolower($nama).'%'])->whereRaw('LOWER(`tempat_lahir`) LIKE ? ', [strtolower($tempat_lahir).'%'])->where('tanggal_lahir',strtotime($tanggal_lahir));
        $array = [];
        if($psb_peserta->count() > 0){
            $psb_peserta = $psb_peserta->first();
            $no_wa = UserPsb::where('username',$psb_peserta->no_pendaftaran)->where('no_hp',$no_hp);
            if($no_wa->count() > 0){
                $userpsb = $no_wa->first();
                $nama = $userpsb->nama;
                $username = $userpsb->username;
                $tahun_lahir = date('Y', strtotime($tanggal_lahir));
                $new_nama = substr($nama,0,3);
                $tanggal = date('dm',strtotime($tanggal_lahir));

                $password = $tahun_lahir . $new_nama . $tanggal;

                $update_user = UserPsb::find($userpsb->id);
                $update_user->password = md5($password);
                $update_user->save();

                $pesan = '
Baru saja anda melakukan prosedur lupa password. Berikut username dan password anda
Username : ' . $username . '
Password : ' . $password . '
Silahkan melakukan login ulang dan melengkapi berkas anda.
Terimakasih.

*Pemberitahuan ini otomatis dilakukan oleh sistem*
                ';
                $data['no_wa'] = $no_hp;
                $data['pesan'] = $pesan;
                $wa = helper::send_wa($data);

                $array[] = [
                    'code' => 1,
                    'status' => 'Success',
                    'msg' => 'Data Berhasil Ditemukan. Username dan password akan dikirimkan via WA harap tunggu beberapa saat',
                    'wa' => $wa,
                ];
            }else{
                $array[] = [
                    'code' => 0,
                    'status' => 'error',
                    'msg' => 'No. HP tidak ditemukan',
                ];
            }
        }else{
            $array[] = [
                'code' => 0,
                'status' => 'error',
                'msg' => 'Data Tidak Ditemukan',
            ];
        }
        echo json_encode($array);
    }
    public function logout(Request $request){
        $request->session()->forget('psb_username');
        $request->session()->forget('psb_id');
        return redirect('login');
    }
}
