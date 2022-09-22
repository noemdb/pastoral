<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->integer('estudiant_id')->unique()->unsigned()->comment('Estudiante');
            $table->integer('user_id')->unsigned();
            $table->string('description')->nullable();
            $table->string('observations')->nullable();

            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->boolean('status')->default(true)->comment('Estado');

            $table->timestamps();
            // $table->foreign('estudiant_id')->references('id')->on('estudiants')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('titles');
    }
}
