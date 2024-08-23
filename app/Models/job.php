<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_name',
        'job_company',
        'job_adress',
        'job_salary',
        'job_deadline',
        'job_required_qualification',
        'user_id'
        //'job_type_id'
        //'job_field_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job_type()
    {
        return $this->belongsTo(job_type::class);
    }

    public function job_field()
    {
        return $this->belongsToMany(job_field::class);
    }
}
