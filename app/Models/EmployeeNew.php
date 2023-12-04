<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeNew
 * 
 * @property int $id
 * @property string|null $nik
 * @property string|null $nama
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string|null $jenis_kelamin
 * @property string|null $jabatan
 * @property string|null $jabatan_new
 * @property string|null $alamat
 * @property string|null $pendidikan
 * @property string|null $pengangkatan
 * @property string|null $lembaga_induk
 * @property string|null $lembaga_diikuti
 * @property string|null $photo
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class EmployeeNew extends Model
{
	use SoftDeletes;
	protected $table = 'employee_new';

	protected $fillable = [
		'nik',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'jenis_kelamin',
		'jabatan',
		'jabatan_new',
		'alamat',
		'pendidikan',
		'pengangkatan',
		'lembaga_induk',
		'lembaga_diikuti',
		'photo'
	];
}
