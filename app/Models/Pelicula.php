<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $table ="peliculas";

    //una pelicula un genero 
    public function genero(){
        return $this->belongsTo("App\Models\Genero");
    }

    //una pelicula un director 
    public function director(){
        return $this->belongsTo("App\Models\Director");
    }

    //una pelicula  un usuario
    public function user(){
        return $this->belongsTo("\App\Models\User");

    }

    protected $casts = [
        "actores_principales" =>"array"
    ];

}
