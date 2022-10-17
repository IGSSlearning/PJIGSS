<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidad
 * 
 * @property int $Id_especialidad
 * @property string $Nombre_especialidad
 * @property string $Descripcion
 * 
 * @property Collection|ClinicaServicio[] $clinica_servicios
 *
 * @package App\Models
 */
class Especialidad extends Model
{
	protected $table = 'especialidad';
	protected $primaryKey = 'Id_especialidad';
	public $timestamps = false;

	protected $fillable = [
		'Nombre_especialidad',
		'Descripcion'
	];

	public function clinica_servicios()
	{
		return $this->hasMany(ClinicaServicio::class, 'id_especialidad');
	}
}
