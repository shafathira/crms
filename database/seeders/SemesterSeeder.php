<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert(array(
            array(

              'semester_session' => 'MAR2021-AUG2021',
            ),
            array(
                'semester_session' => 'OCT2021-FEB2022',
            ),
          ));
    }
}
