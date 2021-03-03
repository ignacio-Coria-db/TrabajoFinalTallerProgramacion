<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cargo los generos en la bd

        $genero = new Genero();
        $genero->nombre_genero ="Drama";
        $genero->save();

        $genero = new Genero();
        $genero->nombre_genero ="Terror";
        $genero->save();

        $genero = new Genero();
        $genero->nombre_genero ="Acción";
        $genero->save();

        $genero = new Genero();
        $genero->nombre_genero ="Comedia";
        $genero->save();

        $genero = new Genero();
        $genero->nombre_genero ="Fantasía";
        $genero->save();

        $genero = new Genero();
        $genero->nombre_genero ="Documentales";
        $genero->save();
    }
}
