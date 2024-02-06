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
class CityOld extends Model
{
	protected $table = 'cities';
	public $timestamps = false;

}
