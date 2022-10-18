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
            $table->integer('user_id')->unsigned();
            $table->integer('pastoral_id')->unsigned();
            $table->enum('area',['SISTEMA','PRESIDENCIA','SECRETARIA','COORDINACION','FORMADORES','COMUNIDAD']);
            $table->enum('rol',['ADMINISTRACION','PRESIDENTE','SECRETARIO','COORDINADOR','CATEQUISTA','SUPERVISOR','SUPLENTE','JEFE','ASISTENTE','PARTICIPANTE','REPRESENTANTE','PERSONAL']);
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
