<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PsbGelombangDetail
 * 
 * @property int $id
 * @property int $id_gelombang
 * @property string|null $hari
 * @property string|null $jam
 * @property string|null $syarat
 * @property string|null $prosedur_online
 * @property string|null $prosedur_offline
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PsbGelombangDetail extends Model
{
	use SoftDeletes;
	protected $table = 'psb_gelombang_detail';

	protected $casts = [
		'id_gelombang' => 'int'
	];

	protected $fillable = [
		'id_gelombang',
		'hari',
		'jam',
		'syarat',
		'prosedur_online',
		'prosedur_offline'
	];
}
