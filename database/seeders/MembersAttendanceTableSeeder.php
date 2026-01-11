<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersAttendanceTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('members_attendance')->insert([
            [
                'members_attendance_id' => '304350-sfdfkl4323',
                'members_id' => 'mem_20241230_fg3042',
                'time_in' => $now,
                'time_out' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
