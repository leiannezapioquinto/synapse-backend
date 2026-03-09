<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PlanRepository
{
    public function create(array $data)
    {
        $sql = "
            INSERT INTO plans (
                plans_id,
                plans_name,
                plans_description,
                plans_price_unit,
                plans_price_monthly,
                plans_price_annual,
                plans_status,
                created_at,
                updated_at
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ";

        DB::insert($sql, [
            $data['plans_id'],
            $data['plans_name'],
            $data['plans_description'],
            $data['plans_price_unit'],
            $data['plans_price_monthly'],
            $data['plans_price_annual'],
            $data['plans_status'],
            $data['created_at'],
            $data['updated_at'],
        ]);

        return $data;
    }

    public function findByType(string $type)
    {
        $sql = "SELECT * FROM plans WHERE plans_type = ? LIMIT 1";

        $result = DB::selectOne($sql, [$type]);

        return $result;
    }

    public function updateById(string $id, array $data)
    {
        $sql = "
            UPDATE plans
            SET
                plans_name = ?,
                plans_description = ?,
                plans_price_unit = ?,
                plans_price_monthly = ?,
                plans_price_annual = ?,
                plans_status = ?,
                updated_at = ?
            WHERE plans_id = ?
        ";

        return DB::update($sql, [
            $data['plans_name'],
            $data['plans_description'],
            $data['plans_price_unit'],
            $data['plans_price_monthly'],
            $data['plans_price_annual'],
            $data['plans_status'],
            $data['updated_at'],
            $id
        ]);
    }
}
