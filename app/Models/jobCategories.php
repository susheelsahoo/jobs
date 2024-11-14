<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jobCategories extends Model
{
    protected $fillable = [
        'img',
        'name',
        'dis',
        'start_date',
        'end_date',
        'active_date',
        'status',
        'create_by',
        'updated_by',
        'createdat',
        'updatedat',
    ];
}
