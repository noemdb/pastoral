<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PevaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pevaluations')->insert(
            [
                'teacher_id' =>1,
                'pensum_id' =>1,
                'lapse_id' =>1,
                'section_id' =>1,
                'objetivo' =>'Objetivo',
                'description' =>'Description',
                "observations"=>'Observations',
                "color"=>'Color',
                'header' =>'Título',
                'body' =>'Cuerpo',
                'footer'=>'Pie de página',
                'attachment'=>'Adjunto',
                'status'=>true,
            ],
        );
        
        DB::table('pevaluations')->insert(
            [
                'teacher_id' =>2,
                'pensum_id' =>2,
                'lapse_id' =>2,
                'section_id' =>2,
                'objetivo' =>'Objetivo',
                'description' =>'Description',
                "observations"=>'Observations',
                "color"=>'Color',
                'header' =>'Título',
                'body' =>'Cuerpo',
                'footer'=>'Pie de página',
                'attachment'=>'Adjunto',
                'status'=>true,
            ],
        );

        DB::table('pevaluations')->insert(
            [
                'teacher_id' =>3,
                'pensum_id' =>2,
                'lapse_id' =>2,
                'section_id' =>2,
                'objetivo' =>'Objetivo',
                'description' =>'Description',
                "observations"=>'Observations',
                "color"=>'Color',
                'header' =>'Título',
                'body' =>'Cuerpo',
                'footer'=>'Pie de página',
                'attachment'=>'Adjunto',
                'status'=>true,
            ],
        );
    }
}
