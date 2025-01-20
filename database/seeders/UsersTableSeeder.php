<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create multiple users

        DB::table('users')->insert([
            ['username' => 'username1@gmail.com ',
             'password' => bcrypt('abc123456'),
             'created_at' => date('Y-m-d H:i:s'),
            ],
            ['username' => 'username2@gmail.com ',
             'password' => bcrypt('abc123456'),
             'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
