<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesAttendanceSeeder extends Seeder
{
    public function run(): void
    {
        $attendances = [
            [
                'employees_id' => 1,
                'time_in' => time() - 3600 * 8,
                'time_out' => time() - 3600 * 1,
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'employees_id' => 2,
                'time_in' => time() - 3600 * 9,
                'time_out' => time() - 3600 * 2,
                'created_at' => time(),
                'updated_at' => time(),
            ],
        ];

        DB::table('employees_attendance')->insert($attendances);
    }
}
