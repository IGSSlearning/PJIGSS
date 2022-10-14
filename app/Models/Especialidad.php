<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;


    protected $table = 'especialidad';
    protected $primaryKey = 'Id_especialidad';
    public $timestamps = false;


    protected $fillable = [
        'Nombre_especialidad',
        'Descripcion',
    ];
}
