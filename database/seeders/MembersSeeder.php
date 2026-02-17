<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'members_id' => 1,
                'first_name' => 'Juan',
                'middle_name' => 'Dela',
                'last_name' => 'Cruz',
                'contact_number' => '09171234567',
                'province' => 'Cebu',
                'city' => 'Cebu City',
                'barangay' => 'Lahug',
                'zip_code' => '6000',
                'plan_id' => 1,
                'gender' => 'Male',
                'weight' => 70,
                'plan_status' => 'active',
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'members_id' => 2,
                'first_name' => 'Maria',
                'middle_name' => 'Santos',
                'last_name' => 'Reyes',
                'contact_number' => '09281234567',
                'province' => 'Metro Manila',
                'city' => 'Quezon City',
                'barangay' => 'Cubao',
                'zip_code' => '1109',
                'plan_id' => 2,
                'gender' => 'Female',
                'weight' => 58,
                'plan_status' => 'active',
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'members_id' => 3,
                'first_name' => 'Pedro',
                'middle_name' => 'Lopez',
                'last_name' => 'Gomez',
                'contact_number' => '09351234567',
                'province' => 'Laguna',
                'city' => 'Santa Rosa',
                'barangay' => 'Pulo',
                'zip_code' => '4026',
                'plan_id' => 1,
                'gender' => 'Male',
                'weight' => 75,
                'plan_status' => 'inactive',
                'created_at' => time(),
                'updated_at' => time(),
            ],
        ];

        DB::table('members')->insert($members);
    }
}
