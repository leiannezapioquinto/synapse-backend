<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $collection = 'notifications';

    protected $fillable = [
        'notifications_id',
        'notifications_name',
        'notifications_type',
        'notifications_desc',
        'notifications_status'
    ];
}
