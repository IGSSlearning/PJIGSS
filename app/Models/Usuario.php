<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $Id_usuario
 * @property string|null $no_afiliado
 * @property string $IBM
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Nomb_usuario
 * @property string $Contrasena
 * @property int $id_tipo_usuario
 * 
 * @property TipoUsuario $tipo_usuario
 * @property Collection|ControlRequerimiento[] $control_requerimientos
 * @property Collection|Requerimiento[] $requerimientos
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'Id_usuario';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_usuario' => 'int'
	];

	protected $fillable = [
		'no_afiliado',
		'IBM',
		'Nombres',
		'Apellidos',
		'Nomb_usuario',
		'Contrasena',
		'id_tipo_usuario'
	];

	public function tipo_usuario()
	{
		return $this->belongsTo(TipoUsuario::class, 'id_tipo_usuario');
	}

	public function control_requerimientos()
	{
		return $this->hasMany(ControlRequerimiento::class, 'id_usuario');
	}

	public function requerimientos()
	{
		return $this->hasMany(Requerimiento::class, 'id_usuario');
	}
}
