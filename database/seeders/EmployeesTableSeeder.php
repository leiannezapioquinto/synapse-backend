<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('employees')->insert([
            [
                'employees_id' => 'emp_20251230_304fs2',
                'first_name' => 'Maria',
                'middle_name' => 'Lopez',
                'last_name' => 'Reyes',
                'contact_number' => '09981234567',
                'province' => 'Cebu',
                'city' => 'Cebu City',
                'barangay' => 'Lahug',
                'zip_code' => '6000',
                'gender' => 'female',
                'employment_status' => 'active',
                'employment_first_date' => $now - (365 * 86400),
                'employment_last_date' => null,
                'employee_type' => 'full-time',
                'can_train' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
