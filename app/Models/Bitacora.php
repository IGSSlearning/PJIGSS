<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bitacora
 * 
 * @property int $Id_bitacora
 * @property Carbon $Fecha y hora
 * @property string $Accion
 * @property string $Descripcion
 *
 * @package App\Models
 */
class Bitacora extends Model
{
	protected $table = 'bitacora';
	protected $primaryKey = 'Id_bitacora';
	public $timestamps = false;

	protected $dates = [
		'Fecha y hora'
	];

	protected $fillable = [
		'Fecha y hora',
		'Accion',
		'Descripcion'
	];
}
