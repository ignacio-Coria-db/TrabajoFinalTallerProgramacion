<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cargar actores en bd
        $actores = new Actor();
        $actores->nombre ="Nick";
        $actores->apellido ="Cordero";
        $actores->save();


        $actores = new Actor();
        $actores->nombre ="Mark";
        $actores->apellido ="Rylance";
        $actores->save();
        
        $actores = new Actor();
        $actores->nombre ="Sacha";
        $actores->apellido ="Baron";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Wes";
        $actores->apellido ="Craven";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Ari";
        $actores->apellido ="Lehman";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Richard";
        $actores->apellido ="Donner";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Chuck";
        $actores->apellido ="Norris";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Sylvester";
        $actores->apellido ="Stallone";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Bruce";
        $actores->apellido ="Willis";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Adam";
        $actores->apellido ="Sandler";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Jim";
        $actores->apellido ="Carrey";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Eddie";
        $actores->apellido ="Murphy";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Daniel";
        $actores->apellido ="Radcliffe";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Sean";
        $actores->apellido ="Astin";
        $actores->save();

        $actores = new Actor();
        $actores->nombre ="Marc";
        $actores->apellido ="McClure";
        $actores->save();
        
    }
}
