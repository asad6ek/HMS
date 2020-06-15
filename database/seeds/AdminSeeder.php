<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data =
            [

                [
                    'name'=>'Admin',
                    'email'=>'admin@hms',
                    'password'=>bcrypt('admin1'),
                    'remember_token'=> csrf_token(),
                ],
                [
                    'name'=>'Admin',
                    'email'=>'admin2@hms',
                    'password'=>bcrypt('admin1'),
                    'remember_token'=> csrf_token(),
                ],
                [
                    'name'=>'Admin',
                    'email'=>'admin3@hms',
                    'password'=>bcrypt('admin1'),
                    'remember_token'=> csrf_token(),
                ],
                               [
                    'name'=>'Admin',
                    'email'=>'admin4@hms',
                    'password'=>bcrypt('admin1'),
                    'remember_token'=> csrf_token(),
                ],


         ];

        DB::table('users')->insert($data );

    }
}
