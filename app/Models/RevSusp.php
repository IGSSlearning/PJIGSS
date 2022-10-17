<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RevSusp
 * 
 * @property int $Id_rev_susp
 * @property string|null $observacion
 * 
 * @property Collection|Revision[] $revisions
 * @property Collection|Suspension[] $suspensions
 *
 * @package App\Models
 */
class RevSusp extends Model
{
	protected $table = 'rev_susp';
	protected $primaryKey = 'Id_rev_susp';
	public $timestamps = false;

	protected $fillable = [
		'observacion'
	];

	public function revisions()
	{
		return $this->hasMany(Revision::class, 'id_rev_susp');
	}

	public function suspensions()
	{
		return $this->hasMany(Suspension::class, 'id_rev_susp');
	}
}
