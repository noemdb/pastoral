<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->unique();
            $table->integer('pastoral_id')->nullable()->unsigned();
            $table->enum('area',['SISTEMA','PRESIDENCIA','DIRECCIÓN','SECRETARÍA','COORDINACION','FORMADORES','ASPIRANTADO','COMUNIDAD']);
            $table->enum('rol',['ADMINISTRADOR','PRESIDENTE','DIRECTOR','SECRETARIO','COORDINADOR','CATEQUISTA','COOPERADOR','RELIGIOSO','SUPERVISOR','SUPLENTE','JEFE','ASISTENTE','CATEQUIZANDO','REPRESENTANTE','PERSONAL']);
            $table->string('description')->nullable();
            $table->string('observation')->nullable();
            $table->date('finicial');
            $table->date('ffinal');
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rols');
    }
}
