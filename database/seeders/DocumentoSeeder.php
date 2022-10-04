<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert(
            [
                'user_id'=>1,
                'teacher_id'=>1,
                'publication_id'=>1,
                'description'=>'description',
                'observations'=>'observations',
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'footer'=>'footer',
                'attachment'=>'attachment',
                'status'=>true,
            ],
        );

        DB::table('documents')->insert(
            [
                'user_id'=>1,
                'teacher_id'=>2,
                'publication_id'=>1,
                'description'=>'description2',
                'observations'=>'observations2',
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'footer'=>'footer',
                'attachment'=>'attachment',
                'status'=>true,
            ],
        );

        DB::table('documents')->insert(
            [
                'user_id'=>1,
                'teacher_id'=>3,
                'publication_id'=>1,
                'description'=>'description3',
                'observations'=>'observations4',
                'color'=>'color',
                'header'=>'header',
                'body'=>'body',
                'footer'=>'footer',
                'attachment'=>'attachment',
                'status'=>true,
            ],
        );
    }
}
