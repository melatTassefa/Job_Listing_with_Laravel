<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_field extends Model
{
    use HasFactory;
    protected $fillable = [
        'field_name'
    ];
    public function job(){
        return $this->belongsToMany(job::class);
    }
}
