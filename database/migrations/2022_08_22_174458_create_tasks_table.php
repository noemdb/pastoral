<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('code',32);
            $table->string('description');
            $table->enum('type', ['primary','secondary','success','info','warning','danger','light','dark','default'])->default('default');
            $table->enum('status',['INICIADA','REPROGRAMADA','FINALIZADA'])->default('INICIADA');
            $table->date('finicial');
            $table->date('ffinal');
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
        Schema::dropIfExists('tasks');
    }
}
