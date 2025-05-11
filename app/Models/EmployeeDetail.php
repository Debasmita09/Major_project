<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeDetail extends Model
{
    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'class_10_school_name',
        'class_10_board_name',
        'class_10_percentage_cgpa',
        'class_12_school_name',
        'class_12_board_name',
        'class_12_percentage_cgpa',
        'graduation_college_name',
        'graduation_specialization',
        'graduation_cgpa',
        'post_graduation_college_name',
        'post_graduation_specialization',
        'post_graduation_cgpa',
        'skills',
        'organization_name',
        'experience_duration_years',
        'certificate_links',
        'resume_path',
    ];

    // Optional: Define the table if it's not the plural of the model name
    // protected $table = 'employee_details';

    /**
     * Relationship: Each employee detail belongs to a user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
    