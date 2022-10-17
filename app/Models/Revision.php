<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Revision
 * 
 * @property int $Id_revision
 * @property Carbon $Fecha_rev
 * @property int $id_rev_susp
 * 
 * @property RevSusp $rev_susp
 * @property Collection|Oficio[] $oficios
 *
 * @package App\Models
 */
class Revision extends Model
{
	protected $table = 'revision';
	protected $primaryKey = 'Id_revision';
	public $timestamps = false;

	protected $casts = [
		'id_rev_susp' => 'int'
	];

	protected $dates = [
		'Fecha_rev'
	];

	protected $fillable = [
		'Fecha_rev',
		'id_rev_susp'
	];

	public function rev_susp()
	{
		return $this->belongsTo(RevSusp::class, 'id_rev_susp');
	}

	public function oficios()
	{
		return $this->hasMany(Oficio::class, 'id_revision');
	}
}
