<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maileds', function (Blueprint $table) {
            $table->id();
            $table->integer('mailer_id')->unsigned()->comment('Mensaje');
            $table->integer('representant_id')->unsigned()->comment('Representante');
            $table->integer('job_id')->unsigned()->nullable()->comment('Trabajo asignado');
            $table->integer('failed_job_id')->unsigned()->nullable()->comment('Trabajo fallado');
            $table->enum('status',['true','false'])->default('false')->comment('Estado de envío');
            $table->timestamp('available_at')->nullable();
            $table->timestamps();
            
            $table->foreign('mailer_id')->references('id')->on('mailers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('representant_id')->references('id')->on('representants')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maileds');
    }
}
