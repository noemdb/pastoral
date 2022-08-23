<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representants', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('citype_id')->unsigned()->comment('Tipo de identificación');
            $table->string('ci')->unique()->comment('Cédula de identidad, Id temporal o pasaporte');
            $table->string('name')->comment('Nombres');
            $table->string('phone')->comment('Número de teléfono');
            $table->string('email')->comment('Correo electrónico');
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('status_adviders')->default(false)->comment('Delegado');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('citype_id')->references('id')->on('citypes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representants');
    }
}
