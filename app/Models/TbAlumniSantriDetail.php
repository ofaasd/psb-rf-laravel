<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbAlumniSantriDetail extends Model
{
    protected $table = 'tb_alumni_santri_detail';

    protected $fillable = [
        'no_induk',
        'nama',
        'nisn',
        'nik',
        'anak_ke',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kelas',
        'photo',
        'photo_location',
        'tahun_lulus',
    ];
}

