<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class EmployeeRepository extends BaseRepository
{
    protected $table = 'employees';
    protected $primaryKey = 'employees_id';

    public function create(array $data)
    {
        $data = [
            'employees_id' => $data['employees_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'contact_number' => $data['contact_number'] ?? null,
            'province' => $data['province'] ?? null,
            'city' => $data['city'] ?? null,
            'barangay' => $data['barangay'] ?? null,
            'zip_code' => $data['zip_code'] ?? null,
            'gender' => $data['gender'] ?? null,
            'employment_status' => $data['employment_status'] ?? null,
            'employment_first_date' => $data['employment_first_date'] ?? null,
            'employment_last_date' => $data['employment_last_date'] ?? null,
            'employee_type' => $data['employee_type'] ?? null,
            'can_train' => $data['can_train'] ?? 0,
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at']
        ];

        $this->insert($data);

        return $this->findWhere([
            'employees_id' => $data['employees_id']
        ]);
    }
}
