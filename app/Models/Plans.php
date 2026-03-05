<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $collection = 'plans';

    protected $fillable = [
        'plans_id',
        'plans_name',
        'plans_description',
        'plans_price_monthly',
        'plans_price_annual',
        'plans_price_per_unit',
    ];
}
