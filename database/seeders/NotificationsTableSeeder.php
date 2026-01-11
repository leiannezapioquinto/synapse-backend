<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('notifications')->insert([
            [
                'notifications_id'   => 'notif_405fs2-239lds',
                'notifications_name' => 'Welcome Notification',
                'notifications_type' => 'system',
                'notifications_desc' => 'Sent when a new account is created',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_3lggs2-fpf042',
                'notifications_name' => 'Membership Expiry',
                'notifications_type' => 'member',
                'notifications_desc' => 'Sent when a member plan is about to expire',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_ptv225-d9g9v3',
                'notifications_name' => 'Membership Renewal',
                'notifications_type' => 'member',
                'notifications_desc' => 'Sent when a member plan is renewed',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_05fvs3-d9g9v3',
                'notifications_name' => 'Membership Nearing Expiry',
                'notifications_type' => 'member',
                'notifications_desc' => 'Sent when a member plan is nearing expiration',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_ptv225-orcv03',
                'notifications_name' => 'Account Password Changed',
                'notifications_type' => 'account',
                'notifications_desc' => 'Sent when a user account password is changed',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_ptv225-203568',
                'notifications_name' => 'Member assigned to Trainer',
                'notifications_type' => 'training',
                'notifications_desc' => 'Sent when a trainer has been assigned to a member',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_5f8hn4-203568',
                'notifications_name' => 'Trainer assigned',
                'notifications_type' => 'training',
                'notifications_desc' => 'Sent to member when a trainer has been assigned',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
            [
                'notifications_id'   => 'notif_5f8hn4-34f9v7',
                'notifications_name' => 'Trainer re-assigned',
                'notifications_type' => 'training',
                'notifications_desc' => 'Sent to member when a trainer has been re-assigned',
                'created_at'         => $now,
                'updated_at'         => $now,
            ],
        ]);
    }
}
