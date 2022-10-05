<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enrollments')->insert(
            [
            'pastoral_id' => 1,
            'curriculum_id'=>1,
            'representant_ci' => '20754623',
            'representant_name' => 'Carmin Andreina',
            'citype_id' => 1,
            'ci'=>'14623153',
            'name'=>'Noe David',
            'lastname'=>'Dominguez Cortez',
            'gender'=>'Masculino',
            'laterality'=>'Derecha(o)',
            'date_birth'=>'2028-07-16',
            // 'city_id'=>1,
            // 'state_id'=>1,
            // 'country_id'=>1,
            'city_id'=>130145,
            'state_id'=>2041,
            'country_id'=>239,
            'dir_address'=>'Cocorote',
            'phone'=>'123456789',
            'email'=>'noe.david@gmail.com',
            'twitter'=>'@noe.david',
            'whatsapp'=>'123456789',
            'facebook'=>'@noe.david',
            'patology'=>null,
            'status_nacionality'=>false,
            'status_patology'=>false,
            'status'=>true,
            'description'=>null,
            'observations'=>null,
            ],
        );
    }
}

/*

        

*/