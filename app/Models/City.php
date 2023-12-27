<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @property int $city_id
 * @property string|null $city_name
 * @property int|null $prov_id
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'kota_kab_tbl';
	public $timestamps = false;

}
