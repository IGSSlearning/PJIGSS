<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $Id_rol
 * @property string $Nombre
 * @property string $Descripcion
 * @property int $id_rol_usuario
 * 
 * @property RolUsuario $rol_usuario
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'Id_rol';
	public $timestamps = false;

	protected $casts = [
		'id_rol_usuario' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'Descripcion',
		'id_rol_usuario'
	];

	public function rol_usuario()
	{
		return $this->belongsTo(RolUsuario::class, 'id_rol_usuario');
	}
}
