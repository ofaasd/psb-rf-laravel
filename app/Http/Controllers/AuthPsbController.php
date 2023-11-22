<?php

namespace App\Http\Controllers;
use App\Models\UserPsb;
use URL;

use Illuminate\Http\Request;

class AuthPsbController extends Controller
{
    //
    public function login(){
        return view('auth/login');
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
    public function logout(Request $request){
        $request->session()->forget('psb_username');
        $request->session()->forget('psb_id');
        return redirect('login');
    }
}
