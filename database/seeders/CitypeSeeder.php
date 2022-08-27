<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CitypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citypes')->insert(
            [
                "name"=>"Cédula de Identidad",
                "code"=>"CI:",
                "code2"=>"CI-",
                "code3"=>"C.I.",
            ],
            [
                "name"=>"Cédula de Identidad Temporal",
                "code"=>"CI-T:",
                "code2"=>"CIT-",
                "code3"=>"C.I.T.",
            ],

    );
    }
}
