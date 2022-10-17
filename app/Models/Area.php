<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 * 
 * @property int $Id_area
 * @property string $Nombre
 * @property string $Descripcion
 * 
 * @property Collection|ClinicaServicio[] $clinica_servicios
 *
 * @package App\Models
 */
class Area extends Model
{
	protected $table = 'area';
	protected $primaryKey = 'Id_area';
	public $timestamps = false;

	protected $fillable = [
		'Nombre',
		'Descripcion'
	];

	public function clinica_servicios()
	{
		return $this->hasMany(ClinicaServicio::class, 'id_area');
	}
}
