<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_mains', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallinteger('poll_group_id')->unsigned()->comment('Grupo de la encuesta');
            $table->string('name')->comment('Nombre de la encuesta');
            $table->string('description')->comment('Descripción de la encuesta');
            $table->string('observations')->nullable()->comment('Observaciones de la encuesta');
            $table->date('finicial')->comment('Fecha inicial');
            $table->time('time')->comment('Hora');
            $table->date('ffinal')->comment('Fecha final');
            $table->foreign('poll_group_id')->references('id')->on('poll_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_mains');
    }
}
