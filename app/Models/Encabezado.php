<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encabezado
 * 
 * @property string $Nombre_destinatario
 * @property string $Saludo
 * @property string $Lugar
 * @property string $Despedida
 *
 * @package App\Models
 */
class Encabezado extends Model
{
	protected $table = 'encabezado';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'Nombre_destinatario',
		'Saludo',
		'Lugar',
		'Despedida'
	];
}
