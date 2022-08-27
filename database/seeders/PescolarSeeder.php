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
                "code"=>"0001",
                "name"=>"1re Período",
                "finicial"=>Carbon::now()->startOfYear(),
                "ffinal"=>Carbon::now()->endOfYear(),
                "description"=>"1re Período",
            ]
        );

    }
}
