<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePevaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pevaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id')->unsigned()->comment('Profesor');
            $table->integer('pensum_id')->unsigned()->comment('Asignatura');
            $table->integer('lapse_id')->unsigned()->comment('Lapso');
            $table->integer('section_id')->unsigned()->comment('Lapso');
            $table->string('objetivo')->nullable()->comment('Objetivo General');
            $table->string('description')->nullable()->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');

            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->text('attachment')->nullable();
            $table->boolean('status')->default(true)->comment('Estado');

            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pensum_id')->references('id')->on('pensums')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lapse_id')->references('id')->on('lapses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pevaluations');
    }
}
