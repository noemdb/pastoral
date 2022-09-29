<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curricula')->insert(
            [
                "pescolar_id"=>1,
                "code"=>"3100",
                "name"=>"Catequesis Comunión",
                "order"=>"1",
                "capacity"=>"20",
                "description"=>"Plan educativo para el Catecismo de la Iglesia Católica para la preparaciòn de la 1ra Comunión. Se les explica para que puedan entender y asimilar el significado del misterio de Cristo, mediante distintos recursos y puedan recibirle con fe y devoción.",
                "title"=>"Catequesis 1ra Comunión",
                "status"=>true,
                "status_build_promotion"=>true,
            ]
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>1,
                "code"=>"3200",
                "name"=>"Catequesis Confirmación",
                "order"=>"2",
                "capacity"=>"20",
                "description"=>"Plan educativo para el Catecismo de la Iglesia Católica para la preparaciòn de la Confirmación. Se les explica para que puedan entender y asimilar el significado del misterio de Cristo, mediante distintos recursos y puedan recibirle con fe y devoción.",
                "title"=>"Catequesis Confirmación",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );        
    }
}
