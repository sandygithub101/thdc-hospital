<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

  

class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $users = [

            [

               'name'=>'Admin User',

               'email'=>' ',

               'type'=>1,

               'password'=> bcrypt(' '),

            ],

            [

               'name'=>'Doctor User',

               'email'=>' ',

               'type'=> 2,

               'password'=> bcrypt(' '),

            ],

            [

               'name'=>'User',

               'email'=>' ',

               'type'=>0,

               'password'=> bcrypt(' '),

            ],

        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}
