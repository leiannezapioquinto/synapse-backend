<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Constants\IDPrefixes;
use App\Utils\IDGenerator;

class PlansSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'plans_id' => IdGenerator::generate(IDPrefixes::PLANS_PREFIX, 10),
                'plans_name' => 'Free Plan',
                'plans_description' => 'Default Plan',
                'plans_price_unit' => 0,
                'plans_price_monthly' => 0,
                'plans_price_annual' => 0,
                'plans_status' => 'active',
                'plans_type' => 'Free',
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'plans_id' => IdGenerator::generate(IDPrefixes::PLANS_PREFIX, 10),
                'plans_name' => 'One-Time Plan',
                'plans_description' => 'Daily Plan',
                'plans_price_unit' => 100,
                'plans_price_monthly' => 0,
                'plans_price_annual' => 0,
                'plans_status' => 'active',
                'plans_type' => 'Paid',
                'created_at' => time(),
                'updated_at' => time(),
            ],
            [
                'plans_id' => IdGenerator::generate(IDPrefixes::PLANS_PREFIX, 10),
                'plans_name' => 'Basic Plan',
                'plans_description' => 'Monthly Plan',
                'plans_price_unit' => 16.66,
                'plans_price_monthly' => 500,
                'plans_price_annual' => 6000,
                'plans_status' => 'active',
                'plans_type' => 'Paid',
                'created_at' => time(),
                'updated_at' => time(),
            ]
        ];

        DB::table('plans')->insert($plans);
    }
}
