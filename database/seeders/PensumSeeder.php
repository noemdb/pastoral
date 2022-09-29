<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensums')->insert(
            [
                'level_id' =>1,
                'course_id' =>1,
                'order' =>1,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );

        DB::table('pensums')->insert(
            [
                'level_id' =>1,
                'course_id' =>2,
                'order' =>2,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );

        DB::table('pensums')->insert(
            [
                'level_id' =>2,
                'course_id' =>3,
                'order' =>1,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );

        DB::table('pensums')->insert(
            [
                'level_id' =>2,
                'course_id' =>4,
                'order' =>2,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );
        
        DB::table('pensums')->insert(
            [
                'level_id' =>3,
                'course_id' =>5,
                'order' =>1,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );

        DB::table('pensums')->insert(
            [
                'level_id' =>3,
                'course_id' =>6,
                'order' =>2,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );

        DB::table('pensums')->insert(
            [
                'level_id' =>4,
                'course_id' =>7,
                'order' =>1,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );

        DB::table('pensums')->insert(
            [
                'level_id' =>4,
                'course_id' =>8,
                'order' =>2,
                'hour_t_week' =>2,
                'hour_p_week' =>2,
                'unid_credit' =>2,
                'approved_credit_unir' =>5,
                'enable_academic_index'=>true,
            ],
        );
        
    }
}
