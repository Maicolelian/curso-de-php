<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;

    protected $table = "laravelpelis";

    protected $fillable = [
        'nombre',
        'genero',
        'lenguaje',
        'titulo original',
        'resumen',
        'poster'
    ];
}
