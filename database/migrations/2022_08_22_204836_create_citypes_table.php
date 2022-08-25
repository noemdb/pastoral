<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citypes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre del Tipo de identificación');
            $table->string('code')->comment('Código del Tipo de identificación');
            $table->string('code2')->nullable()->comment('Código2 del Tipo de identificación');
            $table->string('code3')->nullable()->comment('Código3 del Tipo de identificación');
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
        Schema::dropIfExists('citypes');
    }
}
