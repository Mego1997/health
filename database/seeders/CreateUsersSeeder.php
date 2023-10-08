<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Manager',
               'email'=>'manager@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('manager123'),
            ],
            [
               'name'=>'Super Admin',
               'email'=>'ahmedelkhateeb@gmail.com',
               'type'=>1,
               'password'=> bcrypt('admin123'),
            ],
            // [
            //    'name'=>'User',
            //    'email'=>'user@techsolutionstuff.com',
            //    'type'=>0,
            //    'password'=> bcrypt('123456'),
            // ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
