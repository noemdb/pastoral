<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('pevaluation_id')->unsigned()->comment('Plan de Evalaución');
            $table->date('date')->comment('Fecha');
            $table->string('objetivo')->nullable()->comment('Objetivo');
            $table->string('description')->nullable()->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');

            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->text('attachment')->nullable();
            $table->boolean('status')->default(true)->comment('Estado');

            $table->timestamps();
            
            // $table->foreign('pevaluation_id')->references('id')->on('pevaluacions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
