<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('members')->insert([
            [
                'members_id' => 'mem_20241230_fg3042',
                'first_name' => 'Juan',
                'middle_name' => 'Santos',
                'last_name' => 'Dela Cruz',
                'contact_number' => '09171234567',
                'province' => 'Metro Manila',
                'city' => 'Quezon City',
                'barangay' => 'Bagumbayan',
                'zip_code' => '1100',
                'plan_id' => 110420-540204,
                'gender' => 'male',
                'weight' => 70,
                'plan_status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
