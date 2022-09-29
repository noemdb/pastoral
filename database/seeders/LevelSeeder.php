<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'NV1',
                'code_sm' => 'N1',
                'name' => 'Nivel 1',
                'description' => 'Primer Nivel',
                'observations' => 'Primer Nivel',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Primer Nivel del plan educativo',
                'body'=>'1ra Unidad organizativa',
                'footer'=>'Aprendiendo nuesrta fé',
            ],
        );
        
        DB::table('levels')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'NV2',
                'code_sm' => 'N2',
                'name' => 'Nivel 2',
                'description' => 'Segundo Nivel',
                'observations' => 'Segundo Nivel',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Segundo Nivel del plan educativo',
                'body'=>'2da Unidad organizativa',
                'footer'=>'Fortaleciendo nuesrta fé',
            ],
        );

        DB::table('levels')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'NV1',
                'code_sm' => 'N1',
                'name' => 'Nivel 1',
                'description' => 'Primer Nivel',
                'observations' => 'Primer Nivel',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Primer Nivel del plan educativo',
                'body'=>'1ra Unidad organizativa',
                'footer'=>'Aprendiendo nuesrta fé',
            ],
        );
        
        DB::table('levels')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'NV2',
                'code_sm' => 'N2',
                'name' => 'Nivel 2',
                'description' => 'Segundo Nivel',
                'observations' => 'Segundo Nivel',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Segundo Nivel del plan educativo',
                'body'=>'2da Unidad organizativa',
                'footer'=>'Fortaleciendo nuesrta fé',
            ],
        );
    }
}
