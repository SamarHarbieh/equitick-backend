<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@equiticks.com',
            'password' => bcrypt('123456'),
            'isAdmin' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@equiticks.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
