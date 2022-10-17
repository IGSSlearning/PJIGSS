<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormularioSuspencion
 * 
 * @property int $Id_suspencion
 * @property string $Estado
 * @property int $id_formulario
 * @property int $id_suspension
 * 
 * @property Formulario $formulario
 * @property Suspension $suspension
 *
 * @package App\Models
 */
class FormularioSuspencion extends Model
{
	protected $table = 'formulario_suspencion';
	protected $primaryKey = 'Id_suspencion';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'binary',
		'id_formulario' => 'int',
		'id_suspension' => 'int'
	];

	protected $fillable = [
		'Estado',
		'id_formulario',
		'id_suspension'
	];

	public function formulario()
	{
		return $this->belongsTo(Formulario::class, 'id_formulario');
	}

	public function suspension()
	{
		return $this->belongsTo(Suspension::class, 'id_suspension');
	}
}
