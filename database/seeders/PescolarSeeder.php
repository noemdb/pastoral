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
                "code"=>"PACFLA 22-23",
                "name"=>"ITINERARIO CATEQUÉTICO AMIGONIANO",
                "finicial"=>Carbon::now()->startOfYear()->addDays(17)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->subMonths(1)->format('Y-m-d'),
                "description"=>"AÑO CATEQUÉTICO 2022-2023",
            ]
        );

        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>1,
                "code"=>"POSTPCFLA 22-23",
                "name"=>"ITINERARIO POSTULANTE AMIGONIANO",
                "finicial"=>Carbon::now()->startOfYear()->addDays(37)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->subMonths(3)->format('Y-m-d'),
                "description"=>"AÑO DE FORMACIÒN 2022-2023",
            ]
        );

        DB::table('pescolars')->insert(
            [
                "pastoral_id"=>1,
                "code"=>"COOPCFLA 22-23",
                "name"=>"ITINERARIO ASPIRANTE COOPERADOR AMIGONIANO",
                "finicial"=>Carbon::now()->startOfYear()->addDays(47)->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->subMonths(2)->format('Y-m-d'),
                "description"=>"AÑO DE FORMACIÒN 2022-2023",
            ]
        );
    }
}
