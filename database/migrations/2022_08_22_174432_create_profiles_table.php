<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->unique();
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->enum('gender',['Masculino', 'Femenino'])->nullable()->comment('Genero');//Másculino,Femenino
            $table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
            $table->string('twitter')->nullable()->comment('Twitter');
            $table->string('instagram')->nullable()->comment('Instagram');
            $table->string('whatsapp')->nullable()->comment('WhatsApp');
            $table->string('facebook')->nullable()->comment('Facebook');
            $table->timestamps();
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
        Schema::dropIfExists('profiles');
    }
}
