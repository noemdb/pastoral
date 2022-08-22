<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiants', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('representant_id')->unsigned();
            $table->integer('citype_id')->unsigned()->default(1)->comment('Tipo de identificación');
            $table->string('ci')->unique()->comment('Cédula de identidad');
            $table->string('name')->nullable()->comment('Nombres');
            $table->string('lastname')->nullable()->comment('Apellidos');
            $table->enum('gender',['Masculino', 'Femenino'])->nullable()->comment('Genero');//Másculino,Femenino
            $table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
            $table->string('city_birth')->nullable()->comment('Ciudad de nacimiento');
            $table->string('town_hall_birth')->nullable()->comment('Municipio de nacimiento');
            $table->string('state_birth')->nullable()->comment('Estado de nacimiento');
            $table->string('country_birth')->nullable()->comment('País de nacimiento');
            $table->string('dir_address')->nullable()->comment('Dirección de residencia');
            $table->string('phone')->nullable()->comment('Número de teléfono fijo');
            $table->string('email')->nullable()->comment('Correo electrónico');
            $table->boolean('status_nacionality')->nullable()->comment('Nacionalizado');

            $table->boolean('status')->default(true)->comment('Estado');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('representant_id')->references('id')->on('representants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('citype_id')->references('id')->on('citypes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiants');
    }
}
