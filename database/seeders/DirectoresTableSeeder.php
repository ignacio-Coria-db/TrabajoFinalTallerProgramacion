<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;


class DirectoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        $directores = new Director();
        $directores->nombre ="Steven";
        $directores->apellido ="Spielberg";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="Quentin";
        $directores->apellido ="Tarantino";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="Woody";
        $directores->apellido ="Allen";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="David";
        $directores->apellido ="Lynch";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="Pedro";
        $directores->apellido ="Alomodóvar";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="Martin";
        $directores->apellido ="Scorsese";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="Roman";
        $directores->apellido ="Polanski";
        $directores->save();

        $directores = new Director();
        $directores->nombre ="Luis";
        $directores->apellido ="Buñuel";
        $directores->save();

      
    }
}
