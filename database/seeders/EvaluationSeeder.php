<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->insert(
            [
                'pevaluation_id' =>1,
                'objetivo' =>'objetivo',
                'description' =>'description',
                'observations' =>'observations',
                'date' =>'2022-05-01',
                'color' =>'color',
                "header"=>'header',
                "body"=>'body',
                'footer' =>'footer',
                'attachment' =>'attachment',
                'status'=>true,
            ],
        );

        DB::table('evaluations')->insert(
            [
                'pevaluation_id' =>2,
                'objetivo' =>'objetivo',
                'description' =>'description',
                'observations' =>'observations',
                'date' =>'2022-05-01',
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
