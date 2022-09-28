<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curricula')->insert(
            [
                "pescolar_id"=>1,
                "code"=>"3200",
                "name"=>"Comunión",
                "order"=>"1",
                "capacity"=>"30",
                "title"=>"1ra Comunión",
                "status"=>true,
                "status_build_promotion"=>true,
            ]
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>1,
                "code"=>"3300",
                "name"=>"Confirmación",
                "order"=>"1",
                "capacity"=>"30",
                "title"=>"Confirmación",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>2,
                "code"=>"3200",
                "name"=>"Comunión",
                "order"=>"1",
                "capacity"=>"30",
                "title"=>"1ra Comunión",
                "status"=>true,
                "status_build_promotion"=>true,
            ]
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>2,
                "code"=>"3300",
                "name"=>"Confirmación",
                "order"=>"1",
                "capacity"=>"30",
                "title"=>"Confirmación",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>3,
                "code"=>"3300",
                "name"=>"Confirmación",
                "order"=>"1",
                "capacity"=>"30",
                "title"=>"Confirmación",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>4,
                "code"=>"3200",
                "name"=>"Comunión",
                "order"=>"1",
                "capacity"=>"30",
                "title"=>"1ra Comunión",
                "status"=>true,
                "status_build_promotion"=>true,
            ]
        );
    }
}
