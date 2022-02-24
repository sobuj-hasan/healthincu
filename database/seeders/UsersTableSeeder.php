<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WebSetting;
use Illuminate\Support\Str;
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
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'image' => '',
            'phone' => '',
            'city' => '',
            'country' => '',
            'address' => '',
            'status' => '1',
            'role' => '1',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'vendor',
            'username' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('vendor'),
            'image' => '',
            'phone' => '',
            'city' => '',
            'country' => '',
            'address' => '',
            'status' => '1',
            'role' => '2',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'image' => '',
            'phone' => '',
            'city' => '',
            'country' => '',
            'address' => '',
            'status' => '1',
            'role' => '3',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
