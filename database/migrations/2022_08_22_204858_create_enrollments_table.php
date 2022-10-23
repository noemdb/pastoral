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
            $table->integer('pastoral_id')->default(1)->unsigned()->comment('Pastoral');
            
            $table->string('name')->comment('Nombres');
            $table->string('lastname')->comment('Apellidos');
            $table->integer('citype_id')->unsigned()->default(1)->comment('Tipo de identificación');
            $table->string('ci')->comment('N. de Identificación');
            $table->integer('curriculum_id')->unsigned()->comment('Plan de Estudio');
            $table->enum('gender',['Masculino', 'Femenino'])->nullable()->comment('Genero');//Másculino,Femenino
            $table->enum('laterality',['Izquierda(o)', 'Derecha(o)'])->nullable()->comment('Lateralidad');//Másculino,Femenino
            
            $table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
            $table->integer('country_id')->nullable()->comment('País de nacimiento');
            $table->integer('state_id')->nullable()->comment('Estado de nacimiento');
            $table->integer('city_id')->nullable()->comment('Ciudad de nacimiento');

            $table->string('dir_address')->nullable()->comment('Dirección de residencia');

            $table->string('christening_place')->nullable()->comment('Lugar del bautizo');
            $table->string('christening_date')->nullable()->comment('Fecha del bautizo');

            $table->string('phone')->nullable()->comment('Número de teléfono');
            $table->string('extracathedra')->nullable()->comment('Actividad Extracatedra');
            $table->string('email')->nullable()->comment('Correo electrónico');
            $table->string('institution')->nullable()->comment('Institución Educativa');
            $table->string('academic_level')->nullable()->comment('Año académico');
            $table->string('academic_section')->nullable()->comment('Sección');

            $table->string('representant_name')->comment('Nombre del representante');
            $table->string('representant_ci')->comment('CI del representante');
            $table->enum('kinship',['Abuelo(a)','Padre/Madre','Tío(a)','Hermano(a)','Otro'])->nullable()->comment('Parentesco');
            $table->string('profession')->nullable()->comment('Profesión');
            
            $table->string('representant_phone')->nullable()->comment('Número de teléfono del representante');
            $table->string('representant_email')->nullable()->comment('Correo electrónico del representante');
            $table->string('twitter')->nullable()->comment('Twitter');
            $table->string('instagram')->nullable()->comment('Instagram');
            $table->string('whatsapp')->nullable()->comment('WhatsApp');
            $table->string('facebook')->nullable()->comment('Facebook');
            $table->string('patology')->nullable()->comment('Patologías que deban ser mencionadas');
            $table->boolean('status_nacionality')->nullable()->comment('Nacionalizado');
            $table->boolean('status_patology')->nullable()->comment('Tratado por especialistas');

            $table->boolean('status')->default(true)->comment('Estado');
            $table->string('description')->nullable()->comment('Descripción');
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
