<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeFixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_fixes', function (Blueprint $table) {
            $table->id();
            $table->integer('pevaluation_id')->unsigned()->comment('Contenido');
            $table->integer('estudiant_id')->unsigned()->comment('Estudiante');
            $table->integer('value')->nullable()->comment('Valor');
            $table->string('description')->nullable()->comment('Descripción');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('pevaluation_id')->references('id')->on('pevaluations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estudiant_id')->references('id')->on('estudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_fixes');
    }
}
