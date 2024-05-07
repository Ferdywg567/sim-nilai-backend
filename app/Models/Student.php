<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'dob' => 'datetime'
    ];

    /**
     * Get the studyClass that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studyClass()
    {
        return $this->belongsTo(StudyClass::class, 'study_class_id', 'id');
    }
}
