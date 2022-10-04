<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert(
            [
                'topic_id' => 1,
                'duration' => 50,
                'description' => 'description',
                'observations' => 'observations',
                'color' => '#029ff0',
                'header' => 'header',
                'body' => 'body',
                'attachment' => 'attachment',
                'footer' => 'footer',
                'status' => true,
            ],
        );

        DB::table('lessons')->insert(
            [
                'topic_id' => 2,
                'duration' => 150,
                'description' => 'description',
                'observations' => 'observations',
                'color' => '#029ff0',
                'header' => 'header',
                'body' => 'body',
                'attachment' => 'attachment',
                'footer' => 'footer',
                'status' => true,
            ],
        );
    }
}
