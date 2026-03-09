<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class AccountRepository
{
    protected $table = 'accounts';

    public function create(array $data)
    {
        DB::insert("
            INSERT INTO {$this->table}
            (accounts_id, id, email, first_name, last_name, password, account_type, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", [
            $data['accounts_id'],
            $data['id'] ?? null,
            $data['email'],
            $data['first_name'],
            $data['last_name'],
            $data['password'],
            $data['account_type'],
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
            SELECT * FROM {$this->table} WHERE accounts_id = ? LIMIT 1
        ", [$id]);

        return $result[0] ?? null;
    }
}
