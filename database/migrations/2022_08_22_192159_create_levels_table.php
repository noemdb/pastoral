<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            // $table->integer('curriculum_id')->unsigned()->comment('Plan de Formación');
            $table->integer('lapse_id')->unsigned()->comment('Programas de Formación');

            $table->string('code')->comment('Código');
            $table->string('code_sm')->comment('Abreviación');
            $table->string('name')->comment('Nombre');
            $table->string('description')->nullable();
            $table->string('observations')->nullable();

            $table->string('color',12)->default('#e5e7eb')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->boolean('status')->comment('Estado');

            $table->timestamps();
            // $table->foreign('curriculum_id')->references('id')->on('curricula')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('lapse_id')->references('id')->on('lapses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
