<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembersAttendance extends Model
{
    protected $collection = 'members_attendance';

    protected $fillable = [
        'members_id',
        'time_in',
        'time_out',
    ];
}
