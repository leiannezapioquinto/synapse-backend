<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = time();

        DB::table('plans')->insert([
            [
                'plans_id' => 1,
                'plans_name' => 'Basic',
                'plans_description' => 'Basic membership plan',
                'plans_price_monthly' => 999,
                'plans_price_annual' => 9999,
                'plans_price_per_unit' => 0,
                'plans_status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'plans_id' => 2,
                'plans_name' => 'Premium',
                'plans_description' => 'Premium membership plan',
                'plans_price_monthly' => 1499,
                'plans_price_annual' => 14999,
                'plans_price_per_unit' => 0,
                'plans_status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
