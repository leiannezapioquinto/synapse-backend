<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class EmployeeRepository
{
    protected $table = 'employees';

    public function create(array $data)
    {
        DB::insert("
            INSERT INTO {$this->table}
            (employees_id, id, first_name, last_name, email, password, position, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", [
            $data['employees_id'],
            $data['id'] ?? null,
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['password'],
            $data['position'] ?? null,
            now()->timestamp(),
            now()->timestamp(),
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
            SELECT * FROM {$this->table} WHERE employees_id = ? LIMIT 1
        ", [$id]);

        return $result[0] ?? null;
    }
}
