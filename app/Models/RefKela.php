<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class RefKela
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
 * @package App\Models
 */
class RefKela extends Model
{
	use SoftDeletes;
	protected $table = 'ref_kelas';

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
    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(EmployeeNew::class, 'employee_id', 'id');
    }
}
