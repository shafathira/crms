<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
            'id'=>1,
            'name' => 'Madam Zarina Binti Zainol ',
            'email' => 'zarina@tmsk.uitm.edu.my	',
            'Phone_No'=>'0173119525',
            'password' => Hash::make('Crms123_'),
            'role_id'=>1,
            'created_at' => now(),
            'updated_at' => now()
            ),

            array(
                'id'=>2,
                'name' => 'Madam Zarina Binti Zainol',
                'email' => 'adminadmin@uitm.edu.my',
                'Phone_No'=>'0112345678',
                'password' => Hash::make('Crms123_'),
                'role_id'=>1,
                'created_at' => now(),
                'updated_at' => now()
            ),

            array(
                'id'=>3,
                'name' => 'Shafaratul Athira',
                'email' => 'AJKTimetable@uitm.edu.my',
                'Phone_No'=>'0112345678',
                'password' => Hash::make('crms123'),
                'role_id'=>3,
                'created_at' => now(),
                'updated_at' => now()
            ),

            array(
                'id'=>4,
                'name' => 'Dr Noraziah Daud',
                'email' => 'Noraziah@fskm.uitm.edu.my',
                'Phone_No'=>'0355211234',
                'password' => Hash::make('crms123'),
                'role_id'=>2,
                'created_at' => now(),
                'updated_at' => now()
            ),

            array(
                'id'=>5,
                'name' => 'Dr Zolidah Kasiran',
                'email' => 'Zolidah@fskm.uitm.edu.my',
                'Phone_No'=>'0355211141',
                'password' => Hash::make('crms123'),
                'role_id'=>2,
                'created_at' => now(),
                'updated_at' => now()
            ),
        ));


    }
}
