<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RolUsuario
 * 
 * @property int $Id_rol_usuario
 * @property string $Estado
 * @property int $id_tipo_usuario
 * 
 * @property TipoUsuario $tipo_usuario
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class RolUsuario extends Model
{
	protected $table = 'rol_usuario';
	protected $primaryKey = 'Id_rol_usuario';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'binary',
		'id_tipo_usuario' => 'int'
	];

	protected $fillable = [
		'Estado',
		'id_tipo_usuario'
	];

	public function tipo_usuario()
	{
		return $this->belongsTo(TipoUsuario::class, 'id_tipo_usuario');
	}

	public function rols()
	{
		return $this->hasMany(Rol::class, 'id_rol_usuario');
	}
}
