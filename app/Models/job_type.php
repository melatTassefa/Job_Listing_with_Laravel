<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_type'
    ];
    public function job(){
        return $this->hasMany(job::class);
    }
}
