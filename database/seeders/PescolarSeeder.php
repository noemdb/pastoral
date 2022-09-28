<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PescolarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>1,
                "code"=>"FLA01",
                "name"=>"Período Educativo 22-23",
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
                "description"=>"Tiempo en el que se realizaràn todas las actividades realicionadas catequesis de la instituciòn 22-23",
            ]
        );

        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>2,
                "code"=>"CTE01",
                "name"=>"Período Educativo 22-23",
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
                "description"=>"Tiempo en el que se realizaràn todas las actividades realicionadas catequesis de la instituciòn 22-23",
            ]
        );

        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>3,
                "code"=>"INP03",
                "name"=>"Período Educativo 22-23",
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
                "description"=>"Tiempo en el que se realizaràn todas las actividades realicionadas catequesis de la instituciòn 22-23",
            ]
        );

        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>4,
                "code"=>"SP03",
                "name"=>"Período Educativo 22-23",
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
                "description"=>"Tiempo en el que se realizaràn todas las actividades realicionadas catequesis de la instituciòn 22-23",
            ]
        );

        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>5,
                "code"=>"BQ01",
                "name"=>"Período Educativo 22-23",
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
                "description"=>"Tiempo en el que se realizaràn todas las actividades realicionadas catequesis de la instituciòn 22-23",
            ]
        );

    }
}
