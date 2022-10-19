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
        $user_id = DB::table('users')->insertGetId(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456'), // 123456
                'remember_token' => Str::random(10),
            ]
        );

        DB::table('teams')->insert(
            [
                'name' => 'NoDoz',
                'user_id' => $user_id,
                'personal_team' => true,
            ]
        );

        DB::table('rols')->insert(
            [
                'area' => "SISTEMA",
                'rol' => "ADMINISTRADOR",            
                'description' => "webmaster del sistema",
                'finicial' => "20000101",
                'ffinal' => "20500101",
                'user_id' => $user_id,
            ]
        );
    }
}
