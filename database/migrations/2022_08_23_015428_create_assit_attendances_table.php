<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssitAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assit_attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('pevaluation_id')->nullable()->unsigned()->comment('Plan de Evalaución');
            $table->integer('user_id')->unsigned();
            $table->string('work_id')->comment('Identificador del Trabajado');
            $table->string('card_id')->comment('Num. de Tarjeta');
            $table->string('biometric_id')->comment('Num. de Tarjeta');
            $table->string('date')->comment('fecha');
            $table->string('time')->comment('fecha');
            $table->string('in_out')->comment('Entrada/Salida');
            $table->string('event_code')->comment('Evento');
            $table->timestamps();
            // $table->foreign('pevaluation_id')->references('id')->on('pevaluacions')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assit_attendances');
    }
}
