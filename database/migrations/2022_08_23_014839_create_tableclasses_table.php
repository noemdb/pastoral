<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableclasses', function (Blueprint $table) {
            $table->id();
            $table->integer('pevaluacion_id')->unsigned()->comment('Plan de Evalaución');
            $table->integer('publication_id')->unsigned()->comment('Publicación');

            $table->text('title')->nullable();
            $table->text('subtitle');
            $table->text('footer')->nullable();

            $table->timestamps();

            $table->foreign('pevaluacion_id')->references('id')->on('pevaluacions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tableclasses');
    }
}
