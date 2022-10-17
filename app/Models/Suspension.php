<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Suspension
 * 
 * @property int $Id_suspension
 * @property Carbon $Fecha_ini_suspesion
 * @property Carbon $Fecha_fin_suspension
 * @property Carbon $Fecha_alta
 * @property Carbon $Fecha_registro
 * @property Carbon $Fecha_envio_prestaciones
 * @property Carbon $Fecha_recibido_prestaciones
 * @property Carbon $Fecha_revision
 * @property string|null $Observaciones
 * @property string $Estado
 * @property int $no_afiliado
 * @property int $id_rev_susp
 * @property int $id_clinica_servicio
 * 
 * @property Afiliado $afiliado
 * @property ClinicaServicio $clinica_servicio
 * @property RevSusp $rev_susp
 * @property Collection|FormularioSuspencion[] $formulario_suspencions
 * @property Collection|OficioSuspencion[] $oficio_suspencions
 *
 * @package App\Models
 */
class Suspension extends Model
{
	protected $table = 'suspension';
	protected $primaryKey = 'Id_suspension';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'binary',
		'no_afiliado' => 'int',
		'id_rev_susp' => 'int',
		'id_clinica_servicio' => 'int'
	];

	protected $dates = [
		'Fecha_ini_suspesion',
		'Fecha_fin_suspension',
		'Fecha_alta',
		'Fecha_registro',
		'Fecha_envio_prestaciones',
		'Fecha_recibido_prestaciones',
		'Fecha_revision'
	];

	protected $fillable = [
		'Fecha_ini_suspesion',
		'Fecha_fin_suspension',
		'Fecha_alta',
		'Fecha_registro',
		'Fecha_envio_prestaciones',
		'Fecha_recibido_prestaciones',
		'Fecha_revision',
		'Observaciones',
		'Estado',
		'no_afiliado',
		'id_rev_susp',
		'id_clinica_servicio'
	];

	public function afiliado()
	{
		return $this->belongsTo(Afiliado::class, 'no_afiliado');
	}

	public function clinica_servicio()
	{
		return $this->belongsTo(ClinicaServicio::class, 'id_clinica_servicio');
	}

	public function rev_susp()
	{
		return $this->belongsTo(RevSusp::class, 'id_rev_susp');
	}

	public function formulario_suspencions()
	{
		return $this->hasMany(FormularioSuspencion::class, 'id_suspension');
	}

	public function oficio_suspencions()
	{
		return $this->hasMany(OficioSuspencion::class, 'id_suspension');
	}
}
