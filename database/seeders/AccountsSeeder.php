<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('accounts')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@synapse.com',
                'email_verified_at' => time(),
                'password' => Hash::make('password123'),
                'account_type' => 'admin',
                'account_status' => 'active',
                'is_logged_in' => false,
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@synapse.com',
                'email_verified_at' => time(),
                'password' => Hash::make('password123'),
                'account_type' => 'user',
                'account_status' => 'active',
                'is_logged_in' => false,
                'created_at' => time(),
                'updated_at' => time(),
            ],
        ]);
    }
}
