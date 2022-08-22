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
            $table->enum('area',['SISTEMA','DIRECCION','AUTORIDAD','CONTROL ESTUDIO','PROFESORADO','ESTUDIANTIL','REPRESENTANTE','INIVITADO']);
            $table->enum('rol',['DIRECTOR','AUTORIDAD1','AUTORIDAD2','AUTORIDAD3','AUTORIDAD4','ADMINISTRADOR','COORDINADOR','SUPERVISOR','PROFESOR','ASISTENTE','USUARIO','ESTUDIANTE','REPRESENTANTE','INIVITADO']);
            $table->string('description');
            $table->string('observation')->nullable();
            $table->date('finicial');
            $table->date('ffinal');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
