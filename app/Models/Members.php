<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $collection = 'members';

    protected $fillable = [
        'members_id',
        'first_name',
        'middle_name',
        'last_name',
        'contact_number',
        'province',
        'city',
        'barangay',
        'zip_code',
        'plan_id',
        'gender',
        'weight',
        'plan_status',
    ];
}
