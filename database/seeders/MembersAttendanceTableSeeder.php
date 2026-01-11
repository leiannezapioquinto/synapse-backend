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
                'members_id' => 1,
                'time_in' => date('H:i:s', $now),
                'time_out' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
