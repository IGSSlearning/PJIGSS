<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ControlRequerimiento
 * 
 * @property int $Id_control_requerimiento
 * @property string $Cod_requerimiento
 * @property Carbon $Fecha_registro
 * @property string $URL_PDF
 * @property string|null $Observacones
 * @property string $Estado
 * @property int $id_usuario
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class ControlRequerimiento extends Model
{
	protected $table = 'control_requerimiento';
	protected $primaryKey = 'Id_control_requerimiento';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'binary',
		'id_usuario' => 'int'
	];

	protected $dates = [
		'Fecha_registro'
	];

	protected $fillable = [
		'Cod_requerimiento',
		'Fecha_registro',
		'URL_PDF',
		'Observacones',
		'Estado',
		'id_usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
