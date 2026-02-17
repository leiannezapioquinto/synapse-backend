<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attendances = [
            [
                'members_id' => 1,
                'time_in' => time() - 3600 * 8,  // 8 hours ago
                'time_out' => time() - 3600 * 1, // 1 hour ago
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'members_id' => 2,
                'time_in' => time() - 3600 * 9,
                'time_out' => time() - 3600 * 2,
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'members_id' => 3,
                'time_in' => time() - 3600 * 7,
                'time_out' => time() - 3600 * 1,
                'created_at' => time(),
                'updated_at' => time(),
            ],
        ];

        DB::table('members_attendance')->insert($attendances);
    }
}
