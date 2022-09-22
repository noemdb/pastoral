<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->integer('estudiant_id')->unsigned()->comment('Estudiante');
            $table->integer('evaluation_id')->unsigned()->comment('Evaluación');
            $table->float('value',6,3)->nullable()->comment('Valor');
            $table->string('description')->nullable()->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');
            $table->timestamps();
            // $table->foreign('estudiant_id')->references('id')->on('estudiants')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('evaluation_id')->references('id')->on('evaluations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
