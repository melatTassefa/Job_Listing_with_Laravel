<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_jobfield extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
        'job_field_id',
        'field_description'
    ];
}
