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
                'name' => 'Segundo Corte',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER3',
                'code_sm' => 'P3',
                'name' => 'Tercer Corte',
                'description' => 'Tercer Corte',
                'observations' => 'Tercer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAAEE',
                'header'=>'Tercer Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER4',
                'code_sm' => 'P4',
                'name' => 'Cuarto Corte',
                'description' => 'Cuarto Corte',
                'observations' => 'Cuarto Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Cuarto Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER1',
                'code_sm' => 'P1',
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
                'curriculum_id' => 2,
                'code' => 'PER2',
                'code_sm' => 'P2',
                'name' => 'Segundo Corte',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER3',
                'code_sm' => 'P3',
                'name' => 'Tercer Corte',
                'description' => 'Tercer Corte',
                'observations' => 'Tercer Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAAEE',
                'header'=>'Tercer Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER4',
                'code_sm' => 'P4',
                'name' => 'Cuarto Corte',
                'description' => 'Cuarto Corte',
                'observations' => 'Cuarto Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(12)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Cuarto Corte',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );
    }
}
