<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre');
            $table->string('code',10)->unique()->comment('Código');
            $table->integer('user_id')->unsigned();
            $table->integer('section_id')->unsigned()->nullable()->comment('Grupo');
            $table->integer('level_id')->unsigned()->nullable()->comment('Grado');
            $table->integer('curriculum_id')->unsigned()->nullable()->comment('Plan de Estudio');
            $table->string('description')->nullable()->comment('Descripción');
            $table->date('fecha')->comment('Fecha Programada');
            $table->time('time')->comment('Hora Programada');
            
            $table->text('subject')->comment('asunto');
            $table->text('title')->comment('Título');
            $table->text('subtitle')->nullable()->comment('Subtítulo');
            $table->text('greeting')->nullable()->comment('Saludo formal');
            $table->longText('body')->comment('cuerpo del mensaje');
            $table->text('insert')->nullable()->comment('Insertado');
            $table->text('footer')->nullable()->comment('Despedida');

            $table->boolean('status')->default(true)->comment('Estado');
            $table->boolean('status_adviders')->default(false)->comment('Estado Asesores');

            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('curriculum_id')->references('id')->on('curricula')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailers');
    }
}
