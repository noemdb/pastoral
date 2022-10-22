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
                'name' => 'Primer Periodo',
                'description' => 'Primer Periodo',
                'observations' => 'Primer Periodo',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER2',
                'code_sm' => 'P2',
                'name' => 'Segundo Periodo',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER3',
                'code_sm' => 'P3',
                'name' => 'Tercer Periodo',
                'description' => 'Tercer Corte',
                'observations' => 'Tercer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAAEE',
                'header'=>'Tercer Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'PER4',
                'code_sm' => 'P4',
                'name' => 'Cuarto Periodo',
                'description' => 'Cuarto Corte',
                'observations' => 'Cuarto Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Cuarto Periodo',
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
                'name' => 'Primer Periodo',
                'description' => 'Primer Periodo',
                'observations' => 'Primer Periodo',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER2',
                'code_sm' => 'P2',
                'name' => 'Segundo Periodo',
                'description' => 'Segundo Corte',
                'observations' => 'Segundo Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segundo Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER3',
                'code_sm' => 'P3',
                'name' => 'Tercer Periodo',
                'description' => 'Tercer Corte',
                'observations' => 'Tercer Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAAEE',
                'header'=>'Tercer Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'PER4',
                'code_sm' => 'P4',
                'name' => 'Cuarto Periodo',
                'description' => 'Cuarto Corte',
                'observations' => 'Cuarto Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(12)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Cuarto Periodo',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );
    }
}
