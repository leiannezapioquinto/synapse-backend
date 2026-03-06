<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Payment extends Model
{
    protected $collection = 'payments';

    protected $fillable = [
        'payment_id',
        'member_id',
        'plans_id',
        'amount',
        'payment_method',
        'payment_status',
        'created_at',
        'updated_at'
    ];
}
