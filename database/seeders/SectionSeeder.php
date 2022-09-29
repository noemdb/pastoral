<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert(
            [
                'level_id' => 1,
                'code' => 'SecA',
                'code_sm' => 'SA',
                'name' => 'Grupo A',
                'description' => 'Grupo A',
                'observations' => 'Grupo A',
                'color' => '#EECCAA',
                'header'=>'1ra Agrupación',
                'body'=>'1ra Agrupación',
                'footer'=>'1ra Agrupación',
                'status' => true,
            ],
        );
        DB::table('sections')->insert(
            [
                'level_id' => 1,
                'code' => 'SecB',
                'code_sm' => 'SB',
                'name' => 'Grupo B',
                'description' => 'Grupo B',
                'observations' => 'Grupo B',
                'color' => '#EECCBB',
                'header'=>'2da Agrupación',
                'body'=>'2da Agrupación',
                'footer'=>'2da Agrupación',
                'status' => true,
            ],
        );

        DB::table('sections')->insert(
            [
                'level_id' => 2,
                'code' => 'SecA',
                'code_sm' => 'SA',
                'name' => 'Grupo A',
                'description' => 'Grupo A',
                'observations' => 'Grupo A',
                'color' => '#EECCAA',
                'header'=>'1ra Agrupación',
                'body'=>'1ra Agrupación',
                'footer'=>'1ra Agrupación',
                'status' => true,
            ],
        );
        DB::table('sections')->insert(
            [
                'level_id' => 2,
                'code' => 'SecB',
                'code_sm' => 'SB',
                'name' => 'Grupo B',
                'description' => 'Grupo B',
                'observations' => 'Grupo B',
                'color' => '#EECCBB',
                'header'=>'2da Agrupación',
                'body'=>'2da Agrupación',
                'footer'=>'2da Agrupación',
                'status' => true,
            ],
        );

        DB::table('sections')->insert(
            [
                'level_id' => 3,
                'code' => 'SecA',
                'code_sm' => 'SA',
                'name' => 'Grupo A',
                'description' => 'Grupo A',
                'observations' => 'Grupo A',
                'color' => '#EECCAA',
                'header'=>'1ra Agrupación',
                'body'=>'1ra Agrupación',
                'footer'=>'1ra Agrupación',
                'status' => true,
            ],
        );
        DB::table('sections')->insert(
            [
                'level_id' => 3,
                'code' => 'SecB',
                'code_sm' => 'SB',
                'name' => 'Grupo B',
                'description' => 'Grupo B',
                'observations' => 'Grupo B',
                'color' => '#EECCBB',
                'header'=>'2da Agrupación',
                'body'=>'2da Agrupación',
                'footer'=>'2da Agrupación',
                'status' => true,
            ],
        );

        DB::table('sections')->insert(
            [
                'level_id' => 4,
                'code' => 'SecA',
                'code_sm' => 'SA',
                'name' => 'Grupo A',
                'description' => 'Grupo A',
                'observations' => 'Grupo A',
                'color' => '#EECCAA',
                'header'=>'1ra Agrupación',
                'body'=>'1ra Agrupación',
                'footer'=>'1ra Agrupación',
                'status' => true,
            ],
        );
        DB::table('sections')->insert(
            [
                'level_id' => 4,
                'code' => 'SecB',
                'code_sm' => 'SB',
                'name' => 'Grupo B',
                'description' => 'Grupo B',
                'observations' => 'Grupo B',
                'color' => '#EECCBB',
                'header'=>'2da Agrupación',
                'body'=>'2da Agrupación',
                'footer'=>'2da Agrupación',
                'status' => true,
            ],
        );
    }
}
