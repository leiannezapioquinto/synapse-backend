<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'account_type' => 'admin',
                'account_status' => 'active',
                'is_logged_in' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
