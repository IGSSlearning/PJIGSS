<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAfiliado
 * 
 * @property int $Id_tipo_afiliado
 * @property string $Nombre
 * @property string $Descripcion
 * @property int $no_afiliado
 * 
 * @property Afiliado $afiliado
 *
 * @package App\Models
 */
class TipoAfiliado extends Model
{
	protected $table = 'tipo_afiliado';
	protected $primaryKey = 'Id_tipo_afiliado';
	public $timestamps = false;

	protected $casts = [
		'no_afiliado' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'Descripcion',
		'no_afiliado'
	];

	public function afiliado()
	{
		return $this->belongsTo(Afiliado::class, 'no_afiliado');
	}
}
