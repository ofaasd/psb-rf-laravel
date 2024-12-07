<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 *
 * @property int $prov_id
 * @property string|null $prov_name
 * @property int|null $locationid
 * @property int|null $status
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = 'provinsi_tbl';
	public $timestamps = false;
    protected $primaryKey = 'id_provinsi';

}
