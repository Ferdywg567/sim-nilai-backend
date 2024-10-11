<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyClass extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the students for the StudyClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'study_class_id', 'id');
    }

    /**
     * Get all of the teachings for the StudyClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachings()
    {
        return $this->hasMany(Teaching::class, 'study_class_id', 'id');
    }

    /**
     * Get the advisor that owns the StudyClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function advisor()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
