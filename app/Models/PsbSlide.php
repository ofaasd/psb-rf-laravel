<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PsbSlide
 * 
 * @property int $id
 * @property string|null $gambar
 * @property string|null $caption
 * @property string|null $link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PsbSlide extends Model
{
	protected $table = 'psb_slide';

	protected $fillable = [
		'gambar',
		'caption',
		'link'
	];
}
