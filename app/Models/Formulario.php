<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Formulario
 * 
 * @property int $Id_formulario
 * @property string $Nombre
 * @property string $Descripcion
 * 
 * @property Collection|FormularioSuspencion[] $formulario_suspencions
 *
 * @package App\Models
 */
class Formulario extends Model
{
	protected $table = 'formulario';
	protected $primaryKey = 'Id_formulario';
	public $timestamps = false;

	protected $fillable = [
		'Nombre',
		'Descripcion'
	];

	public function formulario_suspencions()
	{
		return $this->hasMany(FormularioSuspencion::class, 'id_formulario');
	}
}
