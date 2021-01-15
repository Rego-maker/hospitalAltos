<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // de esta forma, se protege el formulario, si alguien agg un nuevo campo, no lo utilizara
    // porque no esta nombrado dentro del fillabe
    /*protected $fillable = ['name', 'descripcion', 'categoria'];*/

    // de esta forma, eloquent ignora el campo el cual nombra
    protected $guarded = [];

    // Con este metodo, lo que conseguimos es renombrar la url, estariamos viendo el slug (ver bd cursos)
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
