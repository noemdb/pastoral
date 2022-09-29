<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepresentantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representants')->insert(
            [
                'citype_id' => 1,
                'ci' => '1458254',
                'name'=>'Jose Perez',
                'phone'=>'654654654',
                'email'=>'jperez@gmail.com',
                'whatsapp'=>'161523615',
                'telegram'=>'661523614',
                'twitter'=>'@jperez',
                'instagram'=>'@jperez',
                'status_adviders'=>true,
            ],
        );
        DB::table('representants')->insert(
            [
                'citype_id' => 1,
                'ci' => '43664235',
                'name'=>'Gabriel Larez',
                'phone'=>'91823798123',
                'email'=>'larez@gmail.com',
                'whatsapp'=>'6512365',
                'telegram'=>'6615236',
                'twitter'=>'@larez',
                'instagram'=>'@larez',
                'status_adviders'=>true,
            ],
        );

        DB::table('representants')->insert(
            [
                'citype_id' => 1,
                'ci' => '9128319',
                'name'=>'Luis Mendoza',
                'phone'=>'61523461423',
                'email'=>'mendoza@gmail.com',
                'whatsapp'=>'6253446',
                'telegram'=>'6253456',
                'twitter'=>'@mendoza',
                'instagram'=>'@mendoza',
                'status_adviders'=>true,
            ],
        );
    }
}
