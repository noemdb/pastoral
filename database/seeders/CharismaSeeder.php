<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CharismaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('charismas')->insert(
            [
                "name"=>"Jesús Buen pastor",
                "code"=>"JBP:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"San José - Patris Corde",
                "code"=>"SJPC:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"María Dolorosa",
                "code"=>"MaDol:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"Francisco de Asís",
                "code"=>"FrAs:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"La misericordia",
                "code"=>"LMis:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"Pentecostés",
                "code"=>"Pntcs:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"La Trinidad",
                "code"=>"LTrd:",
                "status"=>true
            ]
        );

        DB::table('charismas')->insert(
            [
                "name"=>"Jesús Resucitado",
                "code"=>"JsRct:",
                "status"=>true
            ]
        );
    }
}
