<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeesAttendance extends Model
{
    protected $collection = 'employees_attendance';

    protected $fillable = [
        'employees_id',
        'notifications_name',
        'notifications_type',
        'notifications_desc',
        'notifications_status'
    ];
}
