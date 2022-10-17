<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Afiliado
 * 
 * @property int $No_afiliado
 * @property string $CUI
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Telefono
 * @property string|null $Direccion
 * @property string $Genero
 * @property Carbon $Fecha_Naci
 * @property string|null $IBM
 * 
 * @property Collection|Requerimiento[] $requerimientos
 * @property Collection|Suspension[] $suspensions
 * @property Collection|TipoAfiliado[] $tipo_afiliados
 *
 * @package App\Models
 */
class Afiliado extends Model
{
	protected $table = 'afiliado';
	protected $primaryKey = 'No_afiliado';
	public $timestamps = false;

	protected $dates = [
		'Fecha_Naci'
	];

	protected $fillable = [
		'CUI',
		'Nombres',
		'Apellidos',
		'Telefono',
		'Direccion',
		'Genero',
		'Fecha_Naci',
		'IBM'
	];

	public function requerimientos()
	{
		return $this->hasMany(Requerimiento::class, 'no_afiliado');
	}

	public function suspensions()
	{
		return $this->hasMany(Suspension::class, 'no_afiliado');
	}

	public function tipo_afiliados()
	{
		return $this->hasMany(TipoAfiliado::class, 'no_afiliado');
	}
}
