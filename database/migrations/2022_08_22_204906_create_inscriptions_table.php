<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('tinscription_id')->unsigned()->comment('Tipo de Inscripción');
            $table->integer('section_id')->unsigned()->comment('Sección a inscribir');
            $table->bigInteger('estudiant_id')->unique()->unsigned()->comment('Estudiante');
            $table->string('observations')->nullable()->comment('Observaciones');
            $table->timestamps();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estudiant_id')->references('id')->on('estudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tinscription_id')->references('id')->on('tinscripcions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
