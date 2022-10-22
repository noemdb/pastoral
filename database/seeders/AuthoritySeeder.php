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
			'profile_professional' => 'Religioso Terciario Capuchino de Nuestra Señora de los Dolores',
			'photo' => 'Foto',
			"finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
			"ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
        ]);

        DB::table('authorities')->insert([
			'tauthority_id' => 4,
			'pastoral_id' => 1,
			'name' => 'JOSE DE LA CRUZ',
			'lastname' => 'RIVERO ESCUDERO',
			'ci' => '19454303',
			'position' => 'JEFE 1',
			'profile_professional' => 'Postulante y Licenciado en Psicología',
			'photo' => 'Foto',
			"finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
			"ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
		]);
		
		DB::table('authorities')->insert([
			'tauthority_id' => 5,
			'pastoral_id' => 1,
			'name' => 'CARMIN ANDREINA',
			'lastname' => 'CORTEZ ALEJOS',
			'ci' => '20892623',
			'position' => 'SUB-COORDINADORA DE PASTORAL',
			'profile_professional' => 'Docente y Catequista',
			'photo' => 'Foto',
			"finicial"=>Carbon::now()->startOfYear()->format('Y-m-d'),
			"ffinal"=>Carbon::now()->endOfYear()->format('Y-m-d'),
        ]);
    }
}
