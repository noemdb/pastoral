<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharismasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charismas', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('Código');
            $table->string('name')->comment('Nombre');
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->boolean('status')->comment('Estado');
            $table->string('navbar',12)->nullable()->comment('Color barra de Herramientas');
            $table->string('main',12)->nullable()->comment('Color principal');
            $table->text('image')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charismas');
    }
}
