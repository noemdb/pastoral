<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LapseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER1',
                'code_sm' => 'P1',
                'age_category' => 'Niño(a)',
                'charisma_id' => 1,
                'name' => 'Primer Corte',
                'description' => 'Primer Corte',
                'observations' => 'Primer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER2',
                'code_sm' => 'P2',
                'age_category' => 'Adolescente',
                'charisma_id' => 2,
                'name' => 'Segundo Corte',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(5)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        ////////////////////////////////////////////////////////////////////////////////////////////

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER1',
                'code_sm' => 'P1',
                'age_category' => 'Niño(a)',
                'charisma_id' => 3,
                'name' => 'Primer Corte',
                'description' => 'Primer Corte',
                'observations' => 'Primer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(4)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER2',
                'code_sm' => 'P2',
                'age_category' => 'Adolescente',
                'charisma_id' => 4,
                'name' => 'Segundo Corte',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(7)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        ////////////////////////////////////////////////////////////////////////////////////////////

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 3,
                'code' => 'PER1',
                'code_sm' => 'P1',
                'age_category' => 'Niño(a)',
                'charisma_id' => 5,
                'name' => 'Primer Corte',
                'description' => 'Primer Corte',
                'observations' => 'Primer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 3,
                'code' => 'PER2',
                'code_sm' => 'P2',
                'age_category' => 'Adolescente',
                'charisma_id' => 6,
                'name' => 'Segundo Corte',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(5)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 4,
                'code' => 'PEZ1',
                'code_sm' => 'Z1',
                'age_category' => 'Niño(a)',
                'charisma_id' => 7,
                'name' => 'Primer Corte',
                'description' => 'Primer Corte',
                'observations' => 'Primer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 4,
                'code' => 'PEX2',
                'code_sm' => 'P2',
                'age_category' => 'Adolescente',
                'charisma_id' => 8,
                'name' => 'Segundo Corte',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(5)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );
    }
}
