<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //line 17 punya DB
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
            array(
              'id'=> 1,
              'role_name' => 'ADMIN',
            ),
            array(
              'id'=> 2,
              'role_name' => 'COOR',
            ),
            array(
                'id'=> 3,
                'role_name' => 'TC',
              ),
          ));
    }
}
