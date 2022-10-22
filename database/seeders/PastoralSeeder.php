<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use DB;
use Illuminate\Support\Facades\DB;

class PastoralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pastorals')->insert([
            "name"=>"PASTORAL AMIGONIANA SAN FELIPE",
            "legalname"=>"ASOCIACION DE TERCIARIOS CAPUCHINOS DE VENEZUELA",
            "code"=>"PAS-CFLA",
            "code_official"=>"PAS-CFLA",
            "code_private"=>"PAS-CFLA",
            "description"=>"FORMACIÓN HUMANO-CRISTIANA, FORMACIÓN CATEQUÉTICA AMIGONIANA, FORMACIÓN DE COOPERADORES AMIGONIANOS",
            "observations"=>"F.H.C: CATEQUISTAS, DOCENTES Y TUTORES, F.C.A: SACRAMENTOS DE LA EUCARISTÍA Y CONFIRMACIÓN, F.C.A: ETAPAS DE SENSIBILIZACIÓN, FUNDAMENTACIÓN, IDENTIFIACIÓN Y CONSOLIDACIÓN",
            "header"=>"<h1>Pastoral Amigoniana</h1>",
            "body"=>"<p>Formación Catequético Amigoniana</p>",
            "footer"=>"<div>Itinerario Catequético</div>",
            "rif_institution"=>"J-0005711A-7",
            "phone"=>"+584149439324",
            "address"=>"AVENIDA LA PAZ CON AVENIDA CEDEÑO, URBANIZACIÓN BELLA VISTA, EDIFICIO COLEGIO FRAY LUIS AMIGÓ",
            "city"=>"SAN FELIPE",
            "state"=>"YARACUY",
            "state_code"=>"321",
            "country"=>"VENEZUELA",
            "email_institution"=>"pastoralamigonianasf@gmail.com",
            "password"=>"Amigonianos_SF",
            "txt_contract_study"=>"
            
            CARTA DE COMPROMISO DE LA FORMACIÓN CATEQUÉTICA

            Reciba un saludo de Paz y Bien. 
            
            Al inscribir a su representado (a) en el Itinerario Catequético para Primera Comunión o Confirmación de nuestro Colegio “Fray Luis Amigó”, usted se compromete y autoriza a que el/la catequizando asista asiduamente a la Formación Catequética Amigoniana y adquiera el compromiso de la asistencia a la Santa Misa Dominical Amigoniana en el Auditorio “P. Gil Salas Rupérez”. La inasistencia a tres (3) encuentros de Formación Catequética y/o Santa Misa Dominical, sin justificación, ocasionará que el/la catequizando no pueda continuar con su formación en este año catequético 2022-2023.
            
            Para darle prioridad a la Espiritualidad, la Dirección y Coordinación del Departamento de Pastoral “San José - Patris Corde”, acordó que los catequizandos, usen como traje único el uniforme escolar vigente el día en que reciban el Sacramento de la Eucaristía o el Sacramento de la Confirmación. Asimismo, por la situación económica del país, se recomienda que la decoración del Templo Parroquial o Auditorio “P. Gil Salas Rupérez” sea lo más sencilla posible. El Colegio “Fray Luis Amigó” no se hace responsable de ninguna recepción, luego de que los catequizandos reciban sus sacramentos (eucaristía o confirmación).
            
            Los representantes deberán asistir a las reuniones o convivencias que se planifiquen para los padres y representantes durante el año de formación catequética amigoniana de su representando. De igual forma, la inasistencia a tres (3) encuentros o convivencias de formación, como representante, ocasionará la suspensión inmediata de la Formación Catequética de su catequizando. Recuerde, que la formación en la fe y el fortalecimiento de los valores cristianos es responsabilidad de todos, y no solo del Colegio “Fray Luis Amigo”. Si usted y su representado, están de acuerdo en adquirir estos compromisos, le agradecemos firmar la presente.
            ",
        ]);

    }
}
