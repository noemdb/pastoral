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
                "name"=>"SACRAMENTO DE LA EUCARISTÍA",
                "order"=>"1",
                "capacity"=>"20",
                "description"=>"Plan de Formación Humano-Cristiana basado en el Catecismo de la Iglesia Católica para la preparación del Sacramento de la Eucaristía. Se les explica para que puedan entender y asimilar el significado del misterio de Cristo, mediante distintos recursos, con la finalidad de fortalecer su fe y devoción, a través del Carisma Amigoniano.",
                "profile"=>"Formación Catequética Amigoniana de Primera Comunión",
                "title"=>"Formación Catequética Amigoniana de Primera Comunión",
                "status"=>true,
                "status_build_promotion"=>true,
            ]
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>1,
                "code"=>"3200",
                "name"=>"SACRAMENTO DE LA CONFIRMACIÓN",
                "order"=>"2",
                "capacity"=>"20",
                "description"=>"Plan de Formación Humano-Cristiana basado en el Catecismo de la Iglesia Católica para la preparación del Sacramento de la Confirmación. Se les explica para que puedan entender y asimilar el significado del misterio de Cristo, mediante distintos recursos, con la finalidad de fortalecer su fe y devoción, a través del Carisma Amigoniano.",
                "observations"=>"Formación Catequética Amigoniana de Confirmación",
                "profile"=>"Formación Catequética Amigoniana de Confirmación",
                "title"=>"Formación Catequética Amigoniana de Confirmación",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );        
    }
}
