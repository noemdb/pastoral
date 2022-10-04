<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExcerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('excercises')->insert(
            [
                'topic_id'=>1,
                'objetivo'=>'objetivo',
                'description'=>'Descripción',
                'observations'=>'Observaciones',
                'status_resolved'=>false,
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'footer'=>'footer',
                'attachment'=>'attachment',
                'status'=>true,
            ],
        );
        DB::table('excercises')->insert(
            [
                'topic_id'=>1,
                'objetivo'=>'objetivo 2',
                'description'=>'Descripción 2',
                'observations'=>'Observaciones 2',
                'status_resolved'=>true,
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'footer'=>'footer',
                'attachment'=>'attachment',
                'status'=>true,
            ],
        );

        DB::table('excercises')->insert(
            [
                'topic_id'=>2,
                'objetivo'=>'objetivo 3',
                'description'=>'Descripción 3',
                'observations'=>'Observaciones 3',
                'status_resolved'=>true,
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'footer'=>'footer',
                'attachment'=>'attachment',
                'status'=>false,
            ],
        );
    }
}
