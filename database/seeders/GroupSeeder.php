<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(array(
            array(

              'id' => 1,
              'group_code'=> 'CS2511A',
              'programme_id'=>'2',
              'created_at' => now(),
              'updated_at' => now()
            ),
            array(
                'id' => 2,
                'group_code'=> 'CS2513A',
                'programme_id'=>'2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 3,
                'group_code'=> 'CS2516A',
                'programme_id'=>'2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 4,
                'group_code'=> 'CS2401A',
                'programme_id'=>'1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 5,
                'group_code'=> 'CS2402A',
                'programme_id'=>'1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 6,
                'group_code'=> 'CS2403A',
                'programme_id'=>'1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 7,
                'group_code'=> 'CS2404A',
                'programme_id'=>'1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 8,
                'group_code'=> 'CS2405A',
                'programme_id'=>'1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'id' => 9,
                'group_code'=> 'CS2406A',
                'programme_id'=>'1',
                'created_at' => now(),
                'updated_at' => now()
            ),
          ));
    }
}
