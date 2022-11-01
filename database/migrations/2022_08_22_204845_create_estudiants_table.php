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
            $table->integer('country_id')->nullable()->comment('País de nacimiento');
            $table->integer('state_id')->nullable()->comment('Estado de nacimiento');
            $table->integer('city_id')->nullable()->comment('Ciudad de nacimiento');
            $table->string('dir_address')->nullable()->comment('Dirección de residencia');
            $table->string('phone')->nullable()->comment('Número de teléfono fijo');
            $table->string('email')->nullable()->comment('Correo electrónico');
            $table->boolean('status_nacionality')->nullable()->comment('Nacionalizado');

            $table->enum('laterality',['Izquierda(o)', 'Derecha(o)'])->nullable()->comment('Lateralidad');//Másculino,Femenino
            $table->string('christening_place')->nullable()->comment('Lugar del bautizo');
            $table->string('christening_date')->nullable()->comment('Fecha del bautizo');
            $table->string('extracathedra')->nullable()->comment('Actividad Extracatedra');
            $table->string('institution')->nullable()->comment('Institución Educativa');
            $table->string('academic_level')->nullable()->comment('Año académico');
            $table->string('academic_section')->nullable()->comment('Sección');

            $table->boolean('status')->default(true)->comment('Estado');

            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('representant_id')->references('id')->on('representants')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('citype_id')->references('id')->on('citypes')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
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
