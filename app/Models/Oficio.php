<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Oficio
 * 
 * @property int $Id_oficio
 * @property string $Destinatario
 * @property string $Saludo
 * @property string $Lugar
 * @property string $Correlativo
 * @property string $Clinica_servicio
 * @property Carbon $Fecha
 * @property string $Despedida
 * @property string $Estado
 * @property int $id_revision
 * 
 * @property Revision $revision
 * @property Collection|OficioSuspencion[] $oficio_suspencions
 * @property Collection|Requerimiento[] $requerimientos
 *
 * @package App\Models
 */
class Oficio extends Model
{
	protected $table = 'oficio';
	protected $primaryKey = 'Id_oficio';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'binary',
		'id_revision' => 'int'
	];

	protected $dates = [
		'Fecha'
	];

	protected $fillable = [
		'Destinatario',
		'Saludo',
		'Lugar',
		'Correlativo',
		'Clinica_servicio',
		'Fecha',
		'Despedida',
		'Estado',
		'id_revision'
	];

	public function revision()
	{
		return $this->belongsTo(Revision::class, 'id_revision');
	}

	public function oficio_suspencions()
	{
		return $this->hasMany(OficioSuspencion::class, 'id_oficio');
	}

	public function requerimientos()
	{
		return $this->hasMany(Requerimiento::class, 'id_oficio');
	}
}
