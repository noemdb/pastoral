<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_options', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallinteger('poll_question_id')->unsigned()->comment('Pregunta');
            $table->string('text');
            $table->string('description')->nullable()->comment('Descripción de la encuesta');
            $table->string('observations')->nullable()->comment('Observaciones de la encuesta');
            $table->text('body')->nullable();
            $table->timestamps();
            // $table->foreign('poll_question_id')->references('id')->on('poll_questions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_options');
    }
}
