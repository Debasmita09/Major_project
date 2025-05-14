<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Tell Laravel to use the emp_jobs table
    protected $table = 'emp_jobs';

    protected $fillable = [
        'job_title', 'category', 'designation', 'job_type', 'salary',
        'city', 'job_description', 'benefits', 'qualifications',
        'organisation_name', 'email', 'location', 'website', 'company_logo', 'user_id'
    ];
}
