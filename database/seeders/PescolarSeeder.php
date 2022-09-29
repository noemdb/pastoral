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
                "description"=>"Tiempo en el que se realizarán todas las actividades realicionadas a la catequesis de la institución",
            ]
        );
    }
}
