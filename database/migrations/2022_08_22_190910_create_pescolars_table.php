<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePescolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pescolars', function (Blueprint $table) {
            $table->id();
            $table->integer('pastoral_id')->unsigned();
            $table->string('name');
            $table->string('code')->nullable();
            $table->date('finicial');
            $table->date('ffinal');
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->string('color',12)->default('#e5e7eb')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->timestamps();
            // $table->foreign('pastoral_id')->references('id')->on('pastorals')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pescolars');
    }
}
