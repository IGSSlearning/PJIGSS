<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Requerimiento
 * 
 * @property int $Id_requerimiento
 * @property string $No_requerimiento
 * @property Carbon $Fecha_requerimiento
 * @property Carbon $Fecha_envio
 * @property string $Estado
 * @property string|null $Observaciones
 * @property int $id_oficio
 * @property int $id_usuario
 * @property int $no_afiliado
 * 
 * @property Afiliado $afiliado
 * @property Oficio $oficio
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Requerimiento extends Model
{
	protected $table = 'requerimiento';
	protected $primaryKey = 'Id_requerimiento';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'binary',
		'id_oficio' => 'int',
		'id_usuario' => 'int',
		'no_afiliado' => 'int'
	];

	protected $dates = [
		'Fecha_requerimiento',
		'Fecha_envio'
	];

	protected $fillable = [
		'No_requerimiento',
		'Fecha_requerimiento',
		'Fecha_envio',
		'Estado',
		'Observaciones',
		'id_oficio',
		'id_usuario',
		'no_afiliado'
	];

	public function afiliado()
	{
		return $this->belongsTo(Afiliado::class, 'no_afiliado');
	}

	public function oficio()
	{
		return $this->belongsTo(Oficio::class, 'id_oficio');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
