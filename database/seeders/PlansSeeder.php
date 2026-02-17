<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'plans_name' => 'Basic Plan',
                'plans_description' => 'Monthly Plan',
                'plans_price_monthly' => 500,
                'plans_price_annual' => 6000,
                'plans_status' => 'active',
                'created_at' => time(),
                'updated_at' => time(),
            ]
        ];

        DB::table('plans')->insert($plans);
    }
}
