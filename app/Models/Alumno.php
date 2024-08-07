<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellidos'];

    
    public function asignaturas()


    {
        return $this->belongsToMany(Asignatura::class, 'alumno_asignatura');
    }
}
