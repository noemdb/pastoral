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
                "header"=>'Primer Nivel de la Formación Catequética Amigoniana',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
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
                "header"=>'Segundo Nivel de la Formación Catequética Amigoniana',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
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
                "header"=>'Primer Nivel de la Formación Catequética Amigoniana',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
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
                "header"=>'Segundo Nivel de la Formación Catequética Amigoniana',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('levels')->insert(
            [
                'curriculum_id' => 3,
                'code' => 'PNV1',
                'code_sm' => 'PN1',
                'name' => 'Nivel 1',
                'description' => 'Primer Nivel',
                'observations' => 'Primer Nivel',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Primer Nivel de la Formación Amigoniana - Postulante',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('levels')->insert(
            [
                'curriculum_id' => 4,
                'code' => 'COOPAN1',
                'code_sm' => 'CA1',
                'name' => 'Sencibilización',
                'description' => 'Primer Año',
                'observations' => 'Primer Año',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Primer Año de la Formación Amigoniana - Cooperador',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('levels')->insert(
            [
                'curriculum_id' => 4,
                'code' => 'COOPAN2',
                'code_sm' => 'CA2',
                'name' => 'Formación',
                'description' => 'Segundo Año',
                'observations' => 'Segundo Año',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Segundo Año de la Formación Amigoniana - Cooperador',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('levels')->insert(
            [
                'curriculum_id' => 4,
                'code' => 'COOPAN3',
                'code_sm' => 'CA3',
                'name' => 'Identificación',
                'description' => 'Tercer Año',
                'observations' => 'Tercer Año',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Tercer Año de la Formación Amigoniana - Cooperador',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );

        DB::table('levels')->insert(
            [
                'curriculum_id' => 4,
                'code' => 'COOPAN4',
                'code_sm' => 'CA4',
                'name' => 'Sensibilización',
                'description' => 'Cuarto Año',
                'observations' => 'Cuarto Año',
                "color"=>'#FFDDCC',
                'status'=>true,
                "header"=>'Cuarto Año de la Formación Amigoniana - Cooperador',
                'body'=>'Identidad y Carisma Amigoniano',
                'footer'=>'Identidad y Carisma Amigoniano',
            ],
        );
    }
}
