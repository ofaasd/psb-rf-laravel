<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class RefTahfidz
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $employee_id
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $deleted_at
 * @property int $tahun_ajaran_id
 *
 * @property Collection|SantriTahfidz[] $santri_tahfidzs
 *
 * @package App\Models
 */
class RefTahfidz extends Model
{
	use SoftDeletes;
	protected $table = 'ref_tahfidz';

	protected $casts = [
		'employee_id' => 'int',
		'tahun_ajaran_id' => 'int'
	];

	protected $fillable = [
		'code',
		'name',
		'employee_id',
		'tahun_ajaran_id'
	];

	public function santri_tahfidzs()
	{
		return $this->hasMany(SantriTahfidz::class, 'tahfidz_id');
	}
    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(EmployeeNew::class, 'employee_id', 'id');
    }
}
