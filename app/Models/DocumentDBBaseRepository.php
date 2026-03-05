<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class DocumentDBBaseRepository extends Model
{
    protected $connection = 'documendb';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];
}
