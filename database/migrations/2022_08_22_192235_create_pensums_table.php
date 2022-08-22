<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensums', function (Blueprint $table) {
            $table->id();
            $table->integer('level_id')->unsigned()->comment('Grado');
            $table->integer('course_id')->unsigned()->comment('Asignatura');

            $table->integer('order')->comment('Número de orden de presentación');
            $table->integer('hour_t_week')->nullable()->comment('Número de horas teóricas dictadas en la semana');
            $table->integer('hour_p_week')->nullable()->comment('Número de horas prácticas dictadas en la semana');
            $table->integer('unid_credit')->nullable()->comment('Número de unidades de cr+dito');
            $table->integer('approved_credit_unir')->nullable()->comment('Unidades de Crédito Aprobadas');
            $table->boolean('enable_academic_index')->nullable()->comment('Tomada en cuenta para índice o promedio académico');
            $table->timestamps();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pensums');
    }
}
