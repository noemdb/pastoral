<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert(
            [
                'user_id' => 1,
                'pastoral_id' => '25499876',
                'area' => 'Perez',
                'rol' => 'Pedro',
                'description' => 'Masculino',
                "observation"=>Carbon::now()->subYears(45)->format('Y-m-d'),
                "finicial"=>'Valencia',
                'ffinal' => '123469987'
            ],
        );
    }
}
