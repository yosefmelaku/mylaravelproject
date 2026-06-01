<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Specify which fields can be mass-assigned (filled at once)
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'department'
    ];
}
