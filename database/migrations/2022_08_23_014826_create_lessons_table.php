<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id')->unsigned()->comment('Tema');
            $table->integer('duration')->comment('Duración'); //en minutos
            $table->string('description')->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');
            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('attachment')->nullable();
            $table->text('footer')->nullable();
            $table->boolean('status')->default(true)->comment('Estado');

            $table->timestamps();

            // $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
