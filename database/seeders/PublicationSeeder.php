<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert(
            [
                'teacher_id'=>1,
                'description'=>'description',
                'observations'=>'observations',
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'attachment'=>'attachment',
                'footer'=>'footer',
                'status'=>true,
            ],
        );

        DB::table('publications')->insert(
            [
                'teacher_id'=>2,
                'description'=>'description',
                'observations'=>'observations',
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'attachment'=>'attachment',
                'footer'=>'footer',
                'status'=>true,
            ],
        );

        DB::table('publications')->insert(
            [
                'teacher_id'=>3,
                'description'=>'description',
                'observations'=>'observations',
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'attachment'=>'attachment',
                'footer'=>'footer',
                'status'=>true,
            ],
        );
    }
}
