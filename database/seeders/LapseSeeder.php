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
                'code' => 'COR1',
                'code_sm' => 'C1',
                'name' => 'Corte 1',
                'description' => 'Primer Corte',
                'observations' => 'Primer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Corte',
                'body'=>'Espacio para comenzar con la preparación',
                'footer'=>'Aprendiendo nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'COR2',
                'code_sm' => 'C2',
                'name' => 'Corte 2',
                'description' => 'Segunda Corte',
                'observations' => 'Segunda Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segunda Corte',
                'body'=>'Espacio para continuar con la preparación',
                'footer'=>'Contiuenado con nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'COR3',
                'code_sm' => 'C3',
                'name' => 'Corte 3',
                'description' => 'Tercera Corte',
                'observations' => 'Tercera Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                'status' => true,
                'color' => '#FF55CC',
                'header'=>'Tercera Corte',
                'body'=>'Espacio para proseguir con la preparación',
                'footer'=>'Profundizando con nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'COR4',
                'code_sm' => 'C4',
                'name' => 'Corte 4',
                'description' => 'Cuarta Corte',
                'observations' => 'Cuarta Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAAEE',
                'header'=>'Cuarta Corte',
                'body'=>'Espacio para profundizar con la preparación',
                'footer'=>'Viviendo nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'COR1',
                'code_sm' => 'C1',
                'name' => 'Corte 1',
                'description' => 'Primer Corte',
                'observations' => 'Primer Corte',
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFDDCC',
                'header'=>'Primer Corte',
                'body'=>'Espacio para comenzar con la preparación',
                'footer'=>'Aprendiendo nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'COR2',
                'code_sm' => 'C2',
                'name' => 'Corte 2',
                'description' => 'Segunda Corte',
                'observations' => 'Segunda Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(3)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAACC',
                'header'=>'Segunda Corte',
                'body'=>'Espacio para continuar con la preparación',
                'footer'=>'Contiuenado con nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'COR3',
                'code_sm' => 'C3',
                'name' => 'Corte 3',
                'description' => 'Tercera Corte',
                'observations' => 'Tercera Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                'status' => true,
                'color' => '#FF55CC',
                'header'=>'Tercera Corte',
                'body'=>'Espacio para proseguir con la preparación',
                'footer'=>'Profundizando con nuesrta fé',
            ],
        );

        DB::table('lapses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'COR4',
                'code_sm' => 'C4',
                'name' => 'Corte 4',
                'description' => 'Cuarta Corte',
                'observations' => 'Cuarta Corte',
                "finicial"=>Carbon::now()->startOfYear()->addMonths(6)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->startOfYear()->addMonths(9)->format('Y-m-d'),
                'status' => true,
                'color' => '#FFAAEE',
                'header'=>'Cuarta Corte',
                'body'=>'Espacio para profundizar con la preparación',
                'footer'=>'Viviendo nuesrta fé',
            ],
        );
    }
}
