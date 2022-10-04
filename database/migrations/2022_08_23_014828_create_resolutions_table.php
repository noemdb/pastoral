<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolutions', function (Blueprint $table) {
            $table->id();
            $table->integer('excercise_id')->unsigned()->comment('Ejercicio');
            $table->string('description')->comment('Descripción');
            $table->string('observations')->nullable()->comment('Observaciones');
            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('attachment')->nullable();
            $table->text('footer')->nullable();

            $table->boolean('status')->default(true)->comment('Estado');

            $table->timestamps();

            // $table->foreign('excercise_id')->references('id')->on('excercises')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resolutions');
    }
}
