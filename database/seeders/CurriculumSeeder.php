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
                "txt_contract_study"=>"
                    
                    <p><strong>CARTA DE COMPROMISO DE LA FORMACIÓN CATEQUÉTICA.</strong><p>

                    <br />

                    <p>Reciba un saludo de Paz y Bien.</p>

                    <br />
                    
                    <p>
                    Al inscribir a su representado (a) en el Itinerario Catequético para Primera Comunión o Confirmación de nuestro Colegio “Fray Luis Amigó”, usted se compromete y autoriza a que el/la catequizando asista asiduamente a la Formación Catequética Amigoniana y adquiera el compromiso de la asistencia a la Santa Misa Dominical Amigoniana en el Auditorio “P. Gil Salas Rupérez”. La inasistencia a tres (3) encuentros de Formación Catequética y/o Santa Misa Dominical, sin justificación, ocasionará que el/la catequizando no pueda continuar con su formación en este año catequético 2022-2023.
                    
                    Para darle prioridad a la Espiritualidad, la Dirección y Coordinación del Departamento de Pastoral “San José - Patris Corde”, acordó que los catequizandos, usen como traje único el uniforme escolar vigente el día en que reciban el Sacramento de la Eucaristía o el Sacramento de la Confirmación. Asimismo, por la situación económica del país, se recomienda que la decoración del Templo Parroquial o Auditorio “P. Gil Salas Rupérez” sea lo más sencilla posible. El Colegio “Fray Luis Amigó” no se hace responsable de ninguna recepción, luego de que los catequizandos reciban sus sacramentos (eucaristía o confirmación).
                    
                    Los representantes deberán asistir a las reuniones o convivencias que se planifiquen para los padres y representantes durante el año de formación catequética amigoniana de su representando. De igual forma, la inasistencia a tres (3) encuentros o convivencias de formación, como representante, ocasionará la suspensión inmediata de la Formación Catequética de su catequizando. Recuerde, que la formación en la fe y el fortalecimiento de los valores cristianos es responsabilidad de todos, y no solo del Colegio “Fray Luis Amigo”. Si usted y su representado, están de acuerdo en adquirir estos compromisos, le agradecemos firmar la presente.
                    </p>
                    ",                
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
                "txt_contract_study"=>"            
                    <p><strong>CARTA DE COMPROMISO DE LA FORMACIÓN CATEQUÉTICA.</strong><p>

                    <br />

                    <p>Reciba un saludo de Paz y Bien.</p>

                    <br />
                    
                    <p>
                    Al inscribir a su representado (a) en el Itinerario Catequético para Primera Comunión o Confirmación de nuestro Colegio “Fray Luis Amigó”, usted se compromete y autoriza a que el/la catequizando asista asiduamente a la Formación Catequética Amigoniana y adquiera el compromiso de la asistencia a la Santa Misa Dominical Amigoniana en el Auditorio “P. Gil Salas Rupérez”. La inasistencia a tres (3) encuentros de Formación Catequética y/o Santa Misa Dominical, sin justificación, ocasionará que el/la catequizando no pueda continuar con su formación en este año catequético 2022-2023.
                    
                    Para darle prioridad a la Espiritualidad, la Dirección y Coordinación del Departamento de Pastoral “San José - Patris Corde”, acordó que los catequizandos, usen como traje único el uniforme escolar vigente el día en que reciban el Sacramento de la Eucaristía o el Sacramento de la Confirmación. Asimismo, por la situación económica del país, se recomienda que la decoración del Templo Parroquial o Auditorio “P. Gil Salas Rupérez” sea lo más sencilla posible. El Colegio “Fray Luis Amigó” no se hace responsable de ninguna recepción, luego de que los catequizandos reciban sus sacramentos (eucaristía o confirmación).
                    
                    Los representantes deberán asistir a las reuniones o convivencias que se planifiquen para los padres y representantes durante el año de formación catequética amigoniana de su representando. De igual forma, la inasistencia a tres (3) encuentros o convivencias de formación, como representante, ocasionará la suspensión inmediata de la Formación Catequética de su catequizando. Recuerde, que la formación en la fe y el fortalecimiento de los valores cristianos es responsabilidad de todos, y no solo del Colegio “Fray Luis Amigo”. Si usted y su representado, están de acuerdo en adquirir estos compromisos, le agradecemos firmar la presente.
                    </p>
                    ",                
                "title"=>"Formación Catequética Amigoniana de Confirmación",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );   
        
        DB::table('curricula')->insert(
            [
                "pescolar_id"=>2,
                "code"=>"3300",
                "name"=>"FORMACIÓN ASPIRANTADO",
                "order"=>"1",
                "capacity"=>"20",
                "description"=>"Plan de Formación Humano-Cristiana que ofrece un acompañamiento que acerca al “buscador” de forma inicial a nuestra vida comunitaria, según la inspiración evangélica: “¡venid y veréis!” (Jn 1,39)",
                "observations"=>"Formación Amigoniana para el Aspirante",
                "profile"=>"Formación Amigoniana para el Aspirante",
                "title"=>"Formación Amigoniana para el Aspirante",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );

        DB::table('curricula')->insert(
            [
                "pescolar_id"=>3,
                "code"=>"3400",
                "name"=>"FORMACIÓN COOPERADOR",
                "order"=>"1",
                "capacity"=>"20",
                "description"=>"Plan de Formación Humano-Cristiana que ofrece temas de formación en el carisma amigoniano.",
                "observations"=>"Formación Amigoniana para el Aspirante a Cooperador",
                "profile"=>"Formación Amigoniana para el Aspirante a Cooperador",
                "title"=>"Formación Amigoniana para el Aspirante a Cooperador",
                "status"=>true,
                "status_build_promotion"=>true,
            ],
        );
    }
}
