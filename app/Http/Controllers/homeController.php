<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SantriDetail;
use App\Models\RefKamar;
use App\Models\RefKelas;
use App\Models\EmployeeNew;

class homeController extends Controller
{
    //
    public function index(){

        return view('home');
    }
    public function program_kegiatan(){

        return view('program_kegiatan');
    }
    public function santri_aktif(){
        $var['santri'] = SantriDetail::all();
        return view('santri_aktif',compact('var'));
    }

}
