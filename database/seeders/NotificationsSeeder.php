<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Constants\IDPrefixes;
use App\Utils\IDGenerator;
use Illuminate\Support\Str;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
       [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'New Member Registration',
                'notifications_type' => 'member',
                'notifications_desc' => 'A new gym member has successfully registered.',
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ],
            [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'Membership Expiring Soon',
                'notifications_type' => 'membership',
                'notifications_desc' => 'A member\'s gym membership will expire soon.',
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ],
            [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'Membership Expired',
                'notifications_type' => 'membership',
                'notifications_desc' => 'A member\'s gym membership has expired.',
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ],
            [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'Trainer Assigned',
                'notifications_type' => 'trainer',
                'notifications_desc' => 'A trainer has been assigned to a member.',
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ],
            [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'New Employee Added',
                'notifications_type' => 'employee',
                'notifications_desc' => 'A new employee has been added to the gym system.',
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ],
            [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'Payment Received',
                'notifications_type' => 'payment',
                'notifications_desc' => 'A member payment has been successfully recorded.',
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ],
            [
                'notifications_id' => IdGenerator::generate(IDPrefixes::NOTIFICATION_PREFIX, 10),
                'notifications_name' => 'Membership Expiring Soon',
                'notifications_type' => 'membership',
                'notifications_desc' => "A member's gym membership will expire soon.",
                'notifications_status' => 'active',
                'created_at' => now()->timestamp,
                'updated_at' => now()->timestamp,
            ]
        ];

        DB::table('notifications')->insert($notifications);
    }
}
