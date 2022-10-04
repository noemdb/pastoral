<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableclasses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned()->comment('Usuario');
            $table->integer('topic_id')->unsigned()->comment('Temas');
            $table->text('title')->nullable();
            $table->text('messege');
            $table->text('footer')->nullable();

            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tableclasses');
    }
}
