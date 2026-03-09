<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Account extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    protected $table = 'accounts';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'accounts_id',
        'id',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'account_type',
        'account_status',
        'is_logged_in',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
