<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use Notifiable;

    protected $table = 'accounts';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'account_type',
        'account_status',
        'is_logged_in',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Treat timestamps as UNIX
    public $timestamps = true;
}
