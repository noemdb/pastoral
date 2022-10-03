<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert(
            [
                'pevaluation_id' =>1,
                'objetivo' =>'Temas - objetivo',
                'description' =>'Temas - description',
                'observations' =>'Temas - observations',
                'color' =>'color',
                "header"=>'header',
                "body"=>'body',
                'footer' =>'footer',
                'attachment' =>'attachment',
                'status'=>true,
            ],
        );

        DB::table('topics')->insert(
            [
                'pevaluation_id' =>2,
                'objetivo' =>'Temas - objetivo',
                'description' =>'Temas - description',
                'observations' =>'Temas - observations',
                'color' =>'color',
                "header"=>'header',
                "body"=>'body',
                'footer' =>'footer',
                'attachment' =>'attachment',
                'status'=>true,
            ],
        );
    }
}
