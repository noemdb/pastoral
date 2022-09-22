<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmessegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmesseges', function (Blueprint $table) {
            $table->id();
            $table->integer('bmain_id')->unsigned();
            $table->string('app_package_name')->nullable();
            $table->string('messenger_package_name')->nullable();
            $table->string('sender')->nullable();
            $table->string('message')->nullable();
            $table->string('is_group')->nullable();
            $table->string('rule_id')->nullable();
            $table->string('ip_sender')->nullable();
            $table->string('header_key')->nullable();
            $table->string('header_value')->nullable();
            $table->string('host')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('accept_encoding')->nullable();
            $table->string('connection')->nullable();
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
        Schema::dropIfExists('bmesseges');
    }
}


/*

CREATE TABLE `bmesseges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bmain_id` smallint(5) UNSIGNED DEFAULT NULL COMMENT 'Autorrespondedor',
  `app_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre de la aplicación',
  `messenger_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre del servidor de mensajería',
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Enviador',
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mensaje',
  `is_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Pertenece a un grupo',
  `rule_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Ident. de la regla',
  `ip_sender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mensaje',
  `header_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'header key',
  `header_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'header value',
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'host',
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'User-Agent',
  `accept_encoding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Accept-Encoding',
  `connection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Connection',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
*/