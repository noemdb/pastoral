<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ti_teachers')->insert([
			'name' => 'Temporal'
        ]);        
        DB::table('ti_teachers')->insert([
			'name' => 'Permanente'
        ]);
        DB::table('ti_teachers')->insert([
			'name' => 'Regular'
        ]);
        DB::table('ti_teachers')->insert([
			'name' => 'Suplente'
        ]);
    }
}
