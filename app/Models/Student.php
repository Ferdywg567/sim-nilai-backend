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

    /**
     * Get all of the p5Groups for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function p5Groups()
    {
        // return $this->belongsToMany(P5Group::class, P5GroupStudent::class, 'student_id', 'student_id', '');
        return $this->belongsToMany(P5Group::class);
    }
}
