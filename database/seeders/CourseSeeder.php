<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'CMBLA01',
                'code_sm' => 'CMB01',
                'name' => 'Biblia 01',
                'description' => 'Generalidades de la Biblia.',
                'observations' => 'Generalidades de la Biblia y otros aspectos de la actualidad',
                'color' => '#AADDCC',
                'header'=>'Biblia 01',
                'body'=>'Generalidades de la Biblia y otros aspectos de la actualidad',
                'footer'=>'Generalidades de la Biblia',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'CMATE01',
                'code_sm' => 'CMAT01',
                'name' => 'Antiguo Testamento 01',
                'description' => 'Generalidades del Antiguo Testamento',
                'observations' => 'Generalidades del Antiguo Testamento y otros aspectos de la actualidad',
                'color' => '#ADFCFC',
                'header'=>'Antiguo Testamento 01',
                'body'=>'Generalidades de la Antiguo Testamento y otros aspectos de la actualidad',
                'footer'=>'Generalidades de la Antiguo Testamento',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'CMNTE01',
                'code_sm' => 'CMNT01',
                'name' => 'Nuevo Testamento 01',
                'description' => 'Generalidades del Nuevo Testamento',
                'observations' => 'Generalidades del Nuevo Testamento y otros aspectos de la actualidad',
                'color' => '#ADFDFC',
                'header'=>'Nuevo Testamento 01',
                'body'=>'Generalidades de la Nuevo Testamento y otros aspectos de la actualidad',
                'footer'=>'Generalidades de la Nuevo Testamento',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'CMEVA01',
                'code_sm' => 'CMEV01',
                'name' => 'Evangelio 01',
                'description' => 'Generalidades del Evangelio',
                'observations' => 'Generalidades del Evangelio y otros aspectos de la actualidad',
                'color' => '#AAFDCC',
                'header'=>'Evangelio 01',
                'body'=>'Generalidades de la Evangelio y otros aspectos de la actualidad',
                'footer'=>'Generalidades de la Evangelio',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 1,
                'code' => 'CMSAL01',
                'code_sm' => 'CMS01',
                'name' => 'Salmos 01',
                'description' => 'Generalidades del Salmos',
                'observations' => 'Generalidades del Salmos y otros aspectos de la actualidad',
                'color' => '#AAFDFC',
                'header'=>'Salmos 01',
                'body'=>'Generalidades de la Salmos y otros aspectos de la actualidad',
                'footer'=>'Generalidades de la Salmos',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'CFBLA02',
                'code_sm' => 'CFB02',
                'name' => 'Biblia 02',
                'description' => 'Especificaciones de la Biblia.',
                'observations' => 'Especificaciones de la Biblia y otros aspectos de la actualidad',
                'color' => '#A0DDCC',
                'header'=>'Biblia 02',
                'body'=>'Especificaciones de la Biblia y otros aspectos de la actualidad',
                'footer'=>'Especificaciones de la Biblia',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'CFATE02',
                'code_sm' => 'CFAT02',
                'name' => 'Antiguo Testamento 02',
                'description' => 'Especificaciones del Antiguo Testamento',
                'observations' => 'Especificaciones del Antiguo Testamento y otros aspectos de la actualidad',
                'color' => '#ADFAFC',
                'header'=>'Antiguo Testamento 02',
                'body'=>'Especificaciones de la Antiguo Testamento y otros aspectos de la actualidad',
                'footer'=>'Especificaciones de la Antiguo Testamento',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'CFNTE02',
                'code_sm' => 'CFNT02',
                'name' => 'Nuevo Testamento 02',
                'description' => 'Especificaciones del Nuevo Testamento',
                'observations' => 'Especificaciones del Nuevo Testamento y otros aspectos de la actualidad',
                'color' => '#ADADFC',
                'header'=>'Nuevo Testamento 02',
                'body'=>'Especificaciones de la Nuevo Testamento y otros aspectos de la actualidad',
                'footer'=>'Especificaciones de la Nuevo Testamento',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'CFEVA02',
                'code_sm' => 'CFEV02',
                'name' => 'Evangelio 02',
                'description' => 'Especificaciones del Evangelio',
                'observations' => 'Especificaciones del Evangelio y otros aspectos de la actualidad',
                'color' => '#AAF0CC',
                'header'=>'Evangelio 02',
                'body'=>'Especificaciones de la Evangelio y otros aspectos de la actualidad',
                'footer'=>'Especificaciones de la Evangelio',
                'status'=>true,
            ],
        );

        DB::table('courses')->insert(
            [
                'curriculum_id' => 2,
                'code' => 'CFSAL02',
                'code_sm' => 'CFS02',
                'name' => 'Salmos 02',
                'description' => 'Especificaciones del Salmos',
                'observations' => 'Especificaciones del Salmos y otros aspectos de la actualidad',
                'color' => '#AA1DFC',
                'header'=>'Salmos 02',
                'body'=>'Especificaciones de la Salmos y otros aspectos de la actualidad',
                'footer'=>'Especificaciones de la Salmos',
                'status'=>true,
            ],
        );        
    }
}
