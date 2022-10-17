<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 * 
 * @property int $Id_tipo_usuario
 * @property string $Nombre
 * @property string $Descripcion
 * 
 * @property Collection|RolUsuario[] $rol_usuarios
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class TipoUsuario extends Model
{
	protected $table = 'tipo_usuario';
	protected $primaryKey = 'Id_tipo_usuario';
	public $timestamps = false;

	protected $fillable = [
		'Nombre',
		'Descripcion'
	];

	public function rol_usuarios()
	{
		return $this->hasMany(RolUsuario::class, 'id_tipo_usuario');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_tipo_usuario');
	}
}
