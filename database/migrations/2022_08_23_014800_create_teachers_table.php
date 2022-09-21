<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ti_teacher')->comment('Tipo de facilitador');
            $table->string('ci_profesor')->comment('Cédula de identidad, Id temporal o pasaporte');
            $table->string('lastname')->nullable()->comment('Nombres');
            $table->string('name')->nullable()->comment('Nombres');
            $table->string('gender')->nullable()->comment('Genero');//Másculino,Femenino
            $table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
            $table->string('city_birth')->nullable()->comment('Lugar de nacimiento');
            $table->string('dir_address')->nullable()->comment('Dirección de residencia');
            $table->string('phone')->nullable()->comment('Número de teléfono fijo');
            $table->string('cellphone')->nullable()->comment('Número de teléfono celular');
            $table->string('email')->nullable()->comment('Correo electrónico');
            $table->boolean('status')->default(true)->comment('Estado');

            $table->softDeletes();
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
        Schema::dropIfExists('teachers');
    }
}
