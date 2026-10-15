<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrochureLead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'course_id',
    ];
}
