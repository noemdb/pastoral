<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excercises', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id')->unsigned()->comment('Temas');
            $table->string('objetivo')->comment('Objetivo');
            $table->string('description')->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');

            $table->boolean('status_resolved')->default(false)->comment('Resolución');

            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();

            $table->text('attachment')->nullable();

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
        Schema::dropIfExists('excercises');
    }
}
