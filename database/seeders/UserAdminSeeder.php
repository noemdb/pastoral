<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Superadmin
        $user_id = DB::table('users')->insertGetId( ['name' => 'admin','email' => 'admin@admin.com','email_verified_at' => now(),'password' => bcrypt('admin')] );
        DB::table('teams')->insert( ['name' => 'WebAdmin','user_id' => $user_id,'personal_team' => true,] );
        DB::table('rols')->insert( ['area' => "SISTEMA",'rol' => "ADMINISTRADOR",'description' => "webmaster del sistema",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

        //Director
        $user_id = DB::table('users')->insertGetId(['name' => 'presidente','email' => 'presidente@presidente.com','email_verified_at' => now(),'password' => bcrypt('presidente'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "PRESIDENCIA",'rol' => "PRESIDENTE",'description' => "Director de Catequesis",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

                
        //Director
        $user_id = DB::table('users')->insertGetId(['name' => 'director','email' => 'director@director.com','email_verified_at' => now(),'password' => bcrypt('director'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "DIRECCIÓN",'rol' => "DIRECTOR",'description' => "Director de Catequesis",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

        //Coordinador
        $user_id = DB::table('users')->insertGetId(['name' => 'coordinador','email' => 'coordinador@coordinador.com','email_verified_at' => now(),'password' => bcrypt('coordinador'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "COORDINACION",'rol' => "COORDINADOR",'description' => "Coordinador de Catequesis",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

        //Subcoordinador
        $user_id = DB::table('users')->insertGetId(['name' => 'subcoordinador','email' => 'subcoordinador@subcoordinador.com','email_verified_at' => now(),'password' => bcrypt('subcoordinador'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "COORDINACION",'rol' => "SUBCOORDINADOR",'description' => "Subcoordinador de Catequesis",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

        //Catequista
        $user_id = DB::table('users')->insertGetId(['name' => 'catequista','email' => 'catequista@catequista.com','email_verified_at' => now(),'password' => bcrypt('catequista'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "FORMADORES",'rol' => "CATEQUISTA",'description' => "Formador Catequista",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

         //Catequizando
        $user_id = DB::table('users')->insertGetId(['name' => 'catequizando','email' => 'catequizando@catequizando.com','email_verified_at' => now(),'password' => bcrypt('catequizando'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "COMUNIDAD",'rol' => "CATEQUIZANDO",'description' => "Catequisando",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);
    
         //Representante
        $user_id = DB::table('users')->insertGetId(['name' => 'representante','email' => 'representante@representante.com','email_verified_at' => now(),'password' => bcrypt('representante'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "COMUNIDAD",'rol' => "REPRESENTANTE",'description' => "Representante",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

        //Cooperador
        $user_id = DB::table('users')->insertGetId(['name' => 'cooperador','email' => 'cooperador@cooperador.com','email_verified_at' => now(),'password' => bcrypt('cooperador'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "ASPIRANTADO",'rol' => "COOPERADOR",'description' => "Aspirante a cooperador",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);

        //Religioso
        $user_id = DB::table('users')->insertGetId(['name' => 'religioso','email' => 'religioso@religioso.com','email_verified_at' => now(),'password' => bcrypt('religioso'),]);
        DB::table('teams')->insert(['name' => 'PastoralAmigoniana','user_id' => $user_id,'personal_team' => true,]);
        DB::table('rols')->insert(['pastoral_id'=>1,'area' => "ASPIRANTADO",'rol' => "RELIGIOSO",'description' => "Aspirante a religioso",'finicial' => "20000101",'ffinal' => "20500101",'user_id' => $user_id,]);



    }
}
