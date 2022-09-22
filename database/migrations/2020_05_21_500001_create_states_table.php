<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id')->unsigned();
            $table->string('name',100);
            $table->string('country_code',2);
            $table->string('fips_code',255)->nullable()->default(NULL);
            $table->string('iso2',2)->nullable()->default(NULL);
            $table->string('type',191)->nullable()->default(NULL);
            $table->float('latitude',10,8)->nullable()->default(NULL);
            $table->float('longitude',10,8)->nullable()->default(NULL);
            $table->boolean('flag')->default(1);
            $table->string('wikiDataId',255)->nullable()->default(NULL);
            $table->timestamps();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}

/*
CREATE TABLE `states` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` mediumint(8) UNSIGNED NOT NULL,
  `country_code` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fips_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` tinyint(1) NOT NULL DEFAULT 1,
  `wikiDataId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

*/