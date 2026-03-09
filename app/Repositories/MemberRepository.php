<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class MemberRepository
{
    protected $table = 'members';

    public function create(array $data)
    {
        DB::insert("
            INSERT INTO {$this->table}
            (members_id, first_name, last_name, email, password, contact_number, province, city, barangay, zip_code, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", [
            $data['members_id'],
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['password'],
            $data['contact_number'] ?? null,
            $data['province'] ?? null,
            $data['city'] ?? null,
            $data['barangay'] ?? null,
            $data['zip_code'] ?? null,
            now(),
            now(),
        ]);

        return $this->findByEmail($data['email']);
    }

    public function findByEmail(string $email)
    {
        $result = DB::select("
            SELECT * FROM {$this->table} WHERE email = ? LIMIT 1
        ", [$email]);

        return $result[0] ?? null;
    }

    public function findById($id)
    {
        $result = DB::select("
            SELECT * FROM {$this->table} WHERE members_id = ? LIMIT 1
        ", [$id]);

        return $result[0] ?? null;
    }
}
