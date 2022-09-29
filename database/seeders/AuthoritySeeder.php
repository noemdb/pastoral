<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authorities')->insert([
			'tauthority_id' => 1,
			'pastoral_id' => 1,
			'name' => 'EZEQUIEL JOSE',
			'lastname' => 'SIERRA RODRIGUEZ',
			'ci' => '5625888',
			'position' => 'DIRECTOR GENERAL Y ADMINISTRATIVO',
			'profile_professional' => 'Fraile',
			'photo' => 'Foto',
			"finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
			"ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
        ]);

        DB::table('authorities')->insert([
			'tauthority_id' => 2,
			'pastoral_id' => 1,
			'name' => 'LIDOSKA BEATRIZ',
			'lastname' => 'VELIZ DUDAMELL',
			'ci' => '7914556',
			'position' => 'JEFE 1',
			'profile_professional' => 'LICENCIADO',
			'photo' => 'Foto',
			"finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
			"ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
		]);
		
		DB::table('authorities')->insert([
			'tauthority_id' => 3,
			'pastoral_id' => 1,
			'name' => 'JOSE DE LA CRUZ',
			'lastname' => 'RIVERO',
			'ci' => '5625888',
			'position' => 'COORDINADOR FORMATIVO',
			'profile_professional' => 'FRAYLE',
			'photo' => 'Foto',
			"finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
			"ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
        ]);
    }
}
