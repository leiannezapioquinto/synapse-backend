<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class UserNotification extends Model
{
    protected $collection = 'user_notifications';

    protected $fillable = [
        'user_notification_id',
        'member_id',
        'notifications_id',
        'is_read',
        'created_at',
        'updated_at'
    ];
}
