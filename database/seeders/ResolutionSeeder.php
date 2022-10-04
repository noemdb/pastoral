<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resolutions')->insert(
            [
                'excercise_id'=>1,
                'description'=>'description 3',
                'observations'=>'observations 3',
                'color'=>'color 3',
                'header'=>'header',
                'body'=>'body',
                'attachment'=>'attachment',
                'footer'=>'footer'
            ],
        );

        DB::table('resolutions')->insert(
            [
                'excercise_id'=>1,
                'description'=>'description 2',
                'observations'=>'observations 2',
                'color'=>'color 3',
                'header'=>'header',
                'body'=>'body',
                'attachment'=>'attachment',
                'footer'=>'footer'
            ],
        );
        
        DB::table('resolutions')->insert(
            [
                'excercise_id'=>1,
                'description'=>'description 1',
                'observations'=>'observations 1',
                'color'=>'color 3',
                'header'=>'header',
                'body'=>'body',
                'attachment'=>'attachment',
                'footer'=>'footer'
            ],
        );
    }
}
