<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(array(
        array(
            'id'=>1,
            'course_code'=>'CSC401',
            'course_name'=>'FUNDAMENTALS OF COMPUTER SCIENCE',
            'credit_hour'=>'3',
            'created_at' => now(),
            'updated_at' => now()

        ),

        array(
            'id'=>2,
            'course_code'=>'CSC415',
            'course_name'=>'FUNDAMENTALS OF COMPUTER PROBLEM SOLVING',
            'credit_hour'=>'3',
            'created_at' => now(),
            'updated_at' => now()

        ),

        array(
            'id'=>3,
            'course_code'=>'CTU551',
            'course_name'=>'ISLAM AND ASIAN CIVILIZATION',
            'credit_hour'=>'2',
            'created_at' => now(),
            'updated_at' => now()

        ),

        array(
            'id'=>4,
            'course_code'=>'ECO415',
            'course_name'=>'ECONOMICS',
            'credit_hour'=>'3',
            'created_at' => now(),
            'updated_at' => now()

        ),
        array(
            'id'=>5,
            'course_code'=>'HBU111',
            'course_name'=>'NATIONAL KESATRIA I',
            'credit_hour'=>'1',
            'created_at' => now(),
            'updated_at' => now()

        ),
        array(
            'id'=>6,
            'course_code'=>'ITS411',
            'course_name'=>'FUNDAMENTALS OF INFORMATION SYSTEMS DEVELOPMENT',
            'credit_hour'=>'3',
            'created_at' => now(),
            'updated_at' => now()

        ),
        array(
            'id'=>7,
            'course_code'=>'STA416',
            'course_name'=>'APPLIED PROBABILITY AND STATISTICS',
            'credit_hour'=>'3',
            'created_at' => now(),
            'updated_at' => now()

        ),
        array(
            'id'=>8,
            'course_code'=>'CSC435',
            'course_name'=>'OBJECT-ORIENTED PROGRAMMING',
            'credit_hour'=>'3',
            'created_at' => now(),
            'updated_at' => now()

        ),
    ));
    }
}
