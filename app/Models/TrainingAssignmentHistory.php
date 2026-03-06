<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class TrainingAssignmentHistory extends Model
{
    protected $collection = 'training_assignment_histories';

    protected $fillable = [
        'training_assignment_history_id',
        'training_assignment_id',
        'trainer_id',
        'member_id',
        'action',
        'created_at'
    ];
}
