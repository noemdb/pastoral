<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastorals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('legalname');
            $table->string('code',24)->nullable();
            $table->string('code_official',24)->nullable();
            $table->string('code_private',24)->nullable();
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->string('color',12)->default('#e5e7eb')->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->string('rif_institution',16)->unique();            
            $table->string('phone',16)->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('state_code',2)->nullable();
            $table->string('country')->nullable();
            $table->string('email_institution')->unique();
            $table->string('password')->nullable();
            $table->text('txt_contract_study')->nullable();
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
        Schema::dropIfExists('pastorals');
    }
}
