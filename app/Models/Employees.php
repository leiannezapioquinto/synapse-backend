<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $collection = 'employees';

    protected $fillable = [
        'employees_id',
        'first_name',
        'middle_name',
        'last_name',
        'contact_number',
        'province',
        'city',
        'barangay',
        'zip_code',
        'gender',
        'employment_status',
        'employment_first_date',
        'employment_last_date',
        'employee_type',
        'can_train'
    ];
}
