<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            [
                'notifications_id' => 1,
                'notifications_name' => 'Welcome Message',
                'notifications_type' => 'info',
                'notifications_desc' => 'Sent to new members upon registration.',
                'notifications_status' => 'active',
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'notifications_id' => 2,
                'notifications_name' => 'Payment Reminder',
                'notifications_type' => 'alert',
                'notifications_desc' => 'Reminds members to renew their plan.',
                'notifications_status' => 'active',
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'notifications_id' => 3,
                'notifications_name' => 'Plan Expiry',
                'notifications_type' => 'warning',
                'notifications_desc' => 'Notifies members that their plan is expiring soon.',
                'notifications_status' => 'inactive',
                'created_at' => time(),
                'updated_at' => time(),
            ],
        ];

        DB::table('notifications')->insert($notifications);
    }
}
