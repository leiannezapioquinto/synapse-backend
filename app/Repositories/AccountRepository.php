<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class AccountRepository extends BaseRepository
{
    protected $table = 'accounts';

    public function create(array $data)
    {
        $data = [
            'accounts_id' => $data['accounts_id'],
            'id' => $data['id'],
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'password' => $data['password'],
            'account_type' => $data['account_type'] ?? null,
            'account_status' => $data['account_status'] ?? null,
            'is_logged_in' => $data['is_logged_in'] ?? 0,
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at'],
        ];

        $this->insert($data);

        return $this->findWhere([
            'accounts_id' => $data['accounts_id']
        ]);
    }
}
