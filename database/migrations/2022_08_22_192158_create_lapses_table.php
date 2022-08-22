<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapses', function (Blueprint $table) {
            $table->id();
            $table->integer('curriculum_id')->unsigned()->comment('Plan de Estudio');

            $table->string('code')->comment('Código');
            $table->string('code_sm')->comment('Abreviación');
            $table->string('name')->comment('Nombre');
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->date('finicial')->comment('Fecha inicial');
            $table->date('ffinal')->comment('Fecha final');

            $table->boolean('status')->comment('Estado');
            $table->string('color',12)->default('#e5e7eb')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();

            $table->timestamps();
            $table->foreign('curriculum_id')->references('id')->on('curricula')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapses');
    }
}
