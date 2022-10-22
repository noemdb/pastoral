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
                "finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
                "ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
                "description"=>"AÑO CATEQUÉTICO 2022-2023",
            ]
        );
    }
}
