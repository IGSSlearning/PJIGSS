<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClinicaServicio
 * 
 * @property int $Id_clinica/servicio
 * @property string|null $Nombre
 * @property string|null $Descripcion
 * @property int $id_especialidad
 * @property int $id_area
 * 
 * @property Area $area
 * @property Especialidad $especialidad
 * @property Collection|Suspension[] $suspensions
 *
 * @package App\Models
 */
class ClinicaServicio extends Model
{
	protected $table = 'clinica_servicio';
	protected $primaryKey = 'Id_clinica/servicio';
	public $timestamps = false;

	protected $casts = [
		'id_especialidad' => 'int',
		'id_area' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'Descripcion',
		'id_especialidad',
		'id_area'
	];

	public function area()
	{
		return $this->belongsTo(Area::class, 'id_area');
	}

	public function especialidad()
	{
		return $this->belongsTo(Especialidad::class, 'id_especialidad');
	}

	public function suspensions()
	{
		return $this->hasMany(Suspension::class, 'id_clinica_servicio');
	}
}
