<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boptions', function (Blueprint $table) {
            $table->id();
            $table->integer('bmain_id')->unsigned();
            $table->string('key')->nullable();
            $table->string('description')->nullable();
            $table->string('text')->nullable();

            $table->timestamps();
            // $table->foreign('bmain_id')->references('id')->on('bmains')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boptions');
    }
}


/*

CREATE TABLE `boptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bmain_id` smallint(5) UNSIGNED NOT NULL COMMENT 'Ident. del Bot',
  `key` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Clave',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Descripción de la opción',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Auto Respuesta',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

*/