<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->integer('pastoral_id')->default(1)->unsigned();
            $table->string('representant_name')->comment('Nombre del representante');
            $table->string('representant_ci')->comment('CI del representante');
            $table->string('name')->comment('Nombres');
            $table->string('lastname')->comment('Apellidos');
            $table->integer('citype_id')->unsigned()->default(1)->comment('Tipo de identificación');
            $table->string('ci')->comment('N. de Identificación');
            $table->integer('curriculum_id')->unsigned()->comment('Plan de Estudio');
            $table->enum('gender',['Masculino', 'Femenino'])->nullable()->comment('Genero');//Másculino,Femenino
            $table->enum('laterality',['Izquierda(o)', 'Derecha(o)'])->nullable()->comment('Lateralidad');//Másculino,Femenino
            $table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
            $table->string('city_birth')->nullable()->comment('Ciudad de nacimiento');
            $table->string('town_hall_birth')->nullable()->comment('Municipio de nacimiento');
            $table->string('state_birth')->nullable()->comment('Estado de nacimiento');
            $table->string('country_birth')->nullable()->comment('País de nacimiento');
            $table->string('dir_address')->nullable()->comment('Dirección de residencia');
            $table->string('phone')->nullable()->comment('Número de teléfono');
            $table->string('email')->nullable()->comment('Correo electrónico');
            $table->string('twitter')->nullable()->comment('Twitter');
            $table->string('instagram')->nullable()->comment('Instagram');
            $table->string('whatsapp')->nullable()->comment('WhatsApp');
            $table->string('facebook')->nullable()->comment('Facebook');
            $table->string('patology')->nullable()->comment('Patologías que deban ser mensionadas');
            $table->boolean('status_nacionality')->nullable()->comment('Nacionalizado');
            $table->boolean('status_patology')->nullable()->comment('Tratado por especialistas');

            $table->boolean('status')->default(true)->comment('Estado');
            $table->string('description')->nullable();
            $table->string('observations')->nullable()->comment('Observaciones');
            $table->timestamps();
            // $table->foreign('citype_id')->references('id')->on('citypes')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('pastoral_id')->references('id')->on('pastorals')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('curriculum_id')->references('id')->on('curricula')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
