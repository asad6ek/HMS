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
        $data=[];
        $data[]=
            [


                'name'=>'Admin',
                'email'=>'admin@hms',
                'password'=>bcrypt('admin1'),
                'remember_token'=> csrf_token(),

         ];

        DB::table('users')->insert($data );
        $data[]=[

        ];
    }
}
