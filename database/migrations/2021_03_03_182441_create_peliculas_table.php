<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->date("anio");
            $table->string("imagen_portada");
            $table->json("actores_principales");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("genero_id");
            $table->unsignedBigInteger("director_id");
            $table->timestamps();

            //claves foraneas
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('director_id')->references('id')->on('directores');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
