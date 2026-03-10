<?php

namespace App\Repositories;

class MemberRepository extends BaseRepository
{
    protected $table = 'members';
    protected $primaryKey = 'members_id';

    public function create(array $data)
    {
        $data = [
            'members_id' => $data['members_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'contact_number' => $data['contact_number'] ?? null,
            'province' => $data['province'] ?? null,
            'city' => $data['city'] ?? null,
            'barangay' => $data['barangay'] ?? null,
            'zip_code' => $data['zip_code'] ?? null,
            'plan_id' => $data['plan_id'] ?? null,
            'gender' => $data['gender'] ?? null,
            'weight' => $data['weight'] ?? null,
            'plan_status' => $data['plan_status'] ?? null,
            'created_at' => now()->timestamp,
            'updated_at' => now()->timestamp,
        ];

        $this->insert($data);

        return $this->findWhere([
            'members_id' => $data['members_id']
        ]);
    }

    public function findByEmail($email)
    {
        return $this->findWhere([
            'email' => $email
        ]);
    }

    public function findById($id)
    {
        return $this->find($id);
    }
}
