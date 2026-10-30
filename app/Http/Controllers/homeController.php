<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
