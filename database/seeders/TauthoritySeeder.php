<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TauthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tauthorities')->insert([
			'name' => 'PRESIDENTE'
        ]);        
        DB::table('tauthorities')->insert([
			'name' => 'DIRECTOR'
        ]);
        DB::table('tauthorities')->insert([
			'name' => 'SECRETARIO'
        ]);
        DB::table('tauthorities')->insert([
			'name' => 'COORDINADOR'
        ]);
        DB::table('tauthorities')->insert([
			'name' => 'SUB-COORDINADOR'
        ]);
    }
}
