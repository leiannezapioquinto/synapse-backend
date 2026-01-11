<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('sessions')->insert([
            [
                'user_id' => 1,
                'token_hash' => hash('sha256', 'sample-token'),
                'session_info' => json_encode([
                    'ip' => '127.0.0.1',
                    'device' => 'Seeder Script',
                ]),
                'expires_at' => $now + 3600,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
