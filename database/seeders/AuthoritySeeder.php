<?php

namespace Database\Seeders;

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
			'pescolar_id' => 1,
			'pastoral_id' => 1,
			'name' => 'EZEQUIEL JOSE',
			'lastname' => 'SIERRA RODRIGUEZ',
			'ci' => '5625888',
			'position' => 'DIRECTOR GENERAL Y ADMINISTRATIVO',
			'profile_professional' => 'Fraile',
			'photo' => 'Foto',
			'finicial' => '2022-01-01',
			'ffinal' => '2022-12-31',
        ]);

        DB::table('authorities')->insert([
			'tauthority_id' => 2,
			'pescolar_id' => 1,
			'pastoral_id' => 1,
			'name' => 'LIDOSKA BEATRIZ',
			'lastname' => 'VELIZ DUDAMELL',
			'ci' => '7914556',
			'position' => 'JEFE 1',
			'profile_professional' => 'LICENCIADO',
			'photo' => 'Foto',
			'finicial' => '2022-01-01',
			'ffinal' => '2022-12-31',
        ]);
    }
}
