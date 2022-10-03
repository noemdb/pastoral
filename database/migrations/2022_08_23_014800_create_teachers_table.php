<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('ti_teacher_id')->unsigned()->comment('Tipo de facilitador');
            $table->string('ci_profesor')->comment('Cédula de identidad, Id temporal o pasaporte');
            $table->string('lastname')->nullable()->comment('Nombres');
            $table->string('name')->nullable()->comment('Nombres');
            $table->string('gender')->nullable()->comment('Genero');//Másculino,Femenino
            $table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
            $table->string('dir_address')->nullable()->comment('Dirección de residencia');
            $table->string('phone')->nullable()->comment('Número de teléfono fijo');
            $table->string('cellphone')->nullable()->comment('Número de teléfono celular');
            $table->string('email')->nullable()->comment('Correo electrónico');
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('status')->default(true)->comment('Estado');
            $table->timestamps();
            // $table->foreign('ti_teacher_id')->references('id')->on('ti_teachers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('teachers');
    }
}
