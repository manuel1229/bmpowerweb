<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::truncate();


        $users = [
         [
             'first_name' =>'Bmpower',
             'last_name' => 'Super Admin',
             'contact_number' => '09123456789',
             'email' => 'superadmin@gmail.com',
             'password' => Hash::make('Bmpower@123'),
             'user_type' => 'Super Admin',
             'created_at' => now(),
             'updated_at' => now(),
         ],
         [           
             'first_name' =>'admin',
             'last_name' => 'Bmpower',
             'contact_number' => '09123456789',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('Bmpower@123'),
             'user_type' => 'Admin',
             'created_at' => now(),
             'updated_at' => now(),
         ],
         [
            'first_name' => 'Bmpower',
            'last_name' =>'user',
            'contact_number' => '09123456789',
             'email' => 'user@gmail.com',
             'password' => Hash::make('Bmpower@123'),
             'user_type' => 'User',
             'created_at' => now(),
             'updated_at' => now(),
         ]
         ];
         User::insert($users);

    }
}
