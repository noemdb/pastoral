<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmains', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->enum('area',['SISTEMA','DIRECCION','CONTROL ESTUDIO']);
            $table->string('description')->nullable();
            $table->string('observations')->nullable();
            $table->string('platform')->nullable();
            $table->string('header_key')->nullable();
            $table->string('header_value')->nullable();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->date('finicial')->comment('Fecha inicial');
            $table->date('ffinal')->comment('Fecha final');

            $table->string('color',12)->nullable();
            $table->text('header')->nullable();
            $table->text('body')->nullable();
            $table->text('footer')->nullable();
            $table->text('attachment')->nullable();
            $table->boolean('status')->default(true)->comment('Estado');
            
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
        Schema::dropIfExists('bmains');
    }
}

/*



CREATE TABLE `bmains` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre',
  `area` enum('SISTEMA','DIRECCION','AUTORIDAD','ADMINISTRACION','CONTROL ESTUDIO','PROFESORADO','ESTUDIANTIL','REPRESENTANTE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Descripción del Bot',
  `platform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Plataforma de mensajería',
  `header_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Nombre del header',
  `header_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Valor del header',
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Ususario API',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Clave de usuario API',
  `status_active` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false' COMMENT 'Estado de activación',
  `finicial` date NOT NULL,
  `ffinal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

*/