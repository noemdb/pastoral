<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->integer('pastoral_id')->nullable()->unsigned()->comment('Pastoral de Formación');
            $table->integer('pescolar_id')->nullable()->unsigned()->comment('Periodos de Formación');
            $table->integer('curriculum_id')->nullable()->unsigned()->comment('Planes de Formación');
            $table->integer('lapse_id')->nullable()->unsigned()->comment('Programas de Formación');
            $table->integer('level_id')->nullable()->unsigned()->comment('Nivel');
            $table->integer('section_id')->nullable()->unsigned()->comment('Grupos');
            $table->string('code')->comment('Código');
            $table->string('code_sm')->comment('Abreviación');
            $table->string('name')->comment('Nombre');
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->string('autor')->nullable();
            $table->string('color',12)->default('#e5e7eb')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('attachment')->nullable();
            $table->text('footer')->nullable();
            $table->boolean('status')->comment('Estado');

            $table->timestamps();
            // $table->foreign('pastoral_id')->references('id')->on('pastorals')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('pescolar_id')->references('id')->on('pescolars')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('curriculum_id')->references('id')->on('curricula')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('lapse_id')->references('id')->on('lapses')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
