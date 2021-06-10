<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programmes')->insert(array(
            array(
                'id'=>1,
                'programme_code'=>'CS240',
                'programme_name'=>'BACHELOR OF INFORMATION TECHNOLOGY (HONS.)',
                'Coor_id'=>'4',
                'created_at' => now(),
                'updated_at' => now()
            ),

            array(
                'id'=>2,
                'programme_code'=>'CS251',
                'programme_name'=>'BACHELOR OF COMPUTER SCIENCE (HONS.) NETCENTRIC COMPUTING',
                'Coor_id'=>'5',
                'created_at' => now(),
                'updated_at' => now()

            ),

            array(
                'id'=>3,
                'programme_code'=>'CS245',
                'programme_name'=>'BACHELOR OF COMPUTER SCIENCE (HONS.) DATA COMMUNICATION & NETWORKING',
                'Coor_id'=>'5',
                'created_at' => now(),
                'updated_at' => now()

            ),

            array(
                'id'=>4,
                'programme_code'=>'CS255',
                'programme_name'=>'BACHELOR OF COMPUTER SCIENCE (HONS.) DATA COMMUNICATION & NETWORKING',
                'Coor_id'=>'5',
                'created_at' => now(),
                'updated_at' => now()

            ),
        ));

    }
}
