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
                'ti_teacher_id' => 1,
                'ci_profesor' => '25499876',
                'lastname' => 'Perez',
                'name' => 'Pedro',
                'gender' => 'Masculino',
                "date_birth"=>Carbon::now()->subYears(45)->format('Y-m-d'),
                "dir_address"=>'Valencia',
                'phone' => '123469987',
                'cellphone' => '#FF55CC',
                'email'=>'pperez@gmail.com',
                'whatsapp'=>'6615243615423',
                'telegram'=>'61253461234',
                'twitter'=>'@twitter',
                'instagram'=>'@instagram',
                'status'=>true,
            ],
        );

        DB::table('teachers')->insert(
            [
                'ti_teacher_id' => 2,
                'ci_profesor' => '61235461',
                'lastname' => 'Lopez',
                'name' => 'Juan',
                'gender' => 'Masculino',
                "date_birth"=>Carbon::now()->subYears(45)->format('Y-m-d'),
                "dir_address"=>'Barquisimeto',
                'phone' => '123469987',
                'cellphone' => '#FF55CC',
                'email'=>'jlopez@gmail.com',
                'whatsapp'=>'65461523',
                'telegram'=>'2987312',
                'twitter'=>'@twitter',
                'instagram'=>'@instagram',
                'status'=>true,
            ],
        );

        DB::table('teachers')->insert(
            [
                'ti_teacher_id' => 3,
                'ci_profesor' => '326123524',
                'lastname' => 'Rivero',
                'name' => 'Gabriel',
                'gender' => 'Masculino',
                "date_birth"=>Carbon::now()->subYears(45)->format('Y-m-d'),
                "dir_address"=>'Maracay',
                'phone' => '598752',
                'cellphone' => '#FF55CC',
                'email'=>'rgrabriel@gmail.com',
                'whatsapp'=>'198123123',
                'telegram'=>'61235461523',
                'twitter'=>'@twitter',
                'instagram'=>'@instagram',
                'status'=>true,
            ],
        );
    }
}
