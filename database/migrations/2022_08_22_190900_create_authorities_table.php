<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorities', function (Blueprint $table) {
            $table->id();
            $table->integer('tauthority_id')->unsigned();
            $table->integer('pescolar_id')->unsigned();
            $table->integer('pastoral_id')->unsigned();
            $table->string('name');
            $table->string('lastname');
            $table->string('ci');
            $table->string('position');
            $table->string('profile_professional');
            $table->string('photo')->nullable();
            $table->date('finicial')->nullable();
            $table->date('ffinal')->nullable();
            $table->timestamps();
            // $table->foreign('tauthority_id')->references('id')->on('tautoridads')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('pescolar_id')->references('id')->on('pescolars')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('authorities');
    }
}
