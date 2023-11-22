<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PsbBerkasPendukung
 *
 * @property int $id
 * @property int $psb_peserta_id
 * @property string $file_kk
 * @property string $file_ktp
 * @property string $file_rapor
 * @property string $file_photo
 * @property int $created_at
 * @property int $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class PsbBerkasPendukung extends Model
{
	use SoftDeletes;
	protected $table = 'psb_berkas_pendukung';
    protected $dateFormat = 'U';
	protected $casts = [
		'psb_peserta_id' => 'int'
	];

	protected $fillable = [
		'psb_peserta_id',
		'file_kk',
		'file_ktp',
		'file_rapor',
		'file_photo'
	];
}
