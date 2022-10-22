<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(
            [
                'ti_teacher_id' => 2,
                'ci_profesor' => '5625888',
                'lastname' => 'SIERRA RODRIGUEZ',
                'name' => 'EZEQUIEL JOSE',
                'gender' => 'Masculino',
                "date_birth"=>'19620219',
                "dir_address"=>'Avenida la Paz con Avenida la Fuente, Urbanización Bella Vista, Edificio Colegio Fray Luis Amigó, San Felipe',
                'phone' => '04149439324',
                'cellphone' => '04149439324',
                'email'=>'frayezequielamigoniano@gmail.com',
                'whatsapp'=>'04149439324',
                'telegram'=>'61253461234',
                'twitter'=>'@frayezequiel1',
                'instagram'=>'@frayezequiel1',
                'status'=>true,
            ],
        );

        DB::table('teachers')->insert(
            [
                'ti_teacher_id' => 2,
                'ci_profesor' => '19454303',
                'lastname' => 'RIVERO ESCUDERO',
                'name' => 'JOSE DE LA CRUZ',
                'gender' => 'Masculino',
                "date_birth"=>'',
                "dir_address"=>'Barquisimeto',
                'phone' => '04128548859',
                'cellphone' => '04128548859',
                'email'=>'psicoamigoniano@gmail.com',
                'whatsapp'=>'04128548859',
                'telegram'=>'04128548859',
                'twitter'=>'@jossesh12',
                'instagram'=>'@jossesh12',
                'status'=>true,
            ],
        );
    }
}
