<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);


        User::create([
            'name' => 'Editor One',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Editor Two',
            'email' => 'editor2@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);


        User::create([
            'name' => 'Writer One',
            'email' => 'writer@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Writer Two',
            'email' => 'writer2@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);
        User::create([
            'name' => 'Writer Three',
            'email' => 'writer3@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);
    }
}
