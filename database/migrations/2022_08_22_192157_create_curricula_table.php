<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->integer('pescolar_id')->unsigned()->comment('Período Escolar');
            $table->string('code')->nullable()->comment('Código');
            $table->string('name')->comment('Nombre');
            $table->integer('order')->comment('Orden de presentación');
            $table->integer('capacity')->comment('Capacidad máxima');
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->boolean('status_build_promotion')->comment('Genera promoción');
            $table->string('title')->comment('Descripción completa del titulo que se otorga');
            $table->text('profile')->nullable()->comment('Perfil');
            $table->boolean('status')->comment('Estado');
            $table->string('color',12)->default('#e5e7eb')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();

            $table->timestamps();
            $table->foreign('pescolar_id')->references('id')->on('pescolars')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curricula');
    }
}
