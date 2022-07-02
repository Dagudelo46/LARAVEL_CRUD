<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table){

            $table->id();
            $table->string('documento');
            $table->string('tipoDocumento',50);
            $table->string('nombres',50);
            $table->string('apellidos',60);
            $table->string('direccion');
            $table->string('telefono');
            $table->string('genero',50);
            $table->string('fechaNacimiento');
            $table->string('estadoCivil',50);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
