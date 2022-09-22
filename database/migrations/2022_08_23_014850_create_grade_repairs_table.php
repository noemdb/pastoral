<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_repairs', function (Blueprint $table) {
            $table->id();
            $table->integer('estudiant_id')->unsigned()->comment('Estudiante');
            $table->integer('pevaluation_id')->unsigned()->comment('Evaluación');
            $table->float('value',6,3)->nullable()->comment('Valor');
            $table->string('description')->nullable()->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');
            $table->timestamps();
            // $table->foreign('estudiant_id')->references('id')->on('estudiants')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('pevaluation_id')->references('id')->on('pevaluations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_repairs');
    }
}
