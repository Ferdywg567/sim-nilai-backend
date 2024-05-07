<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the competencies for the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function competencies()
    {
        return $this->hasMany(SubjectBasicCompetency::class, 'subject_id', 'id');
    }

    /**
     * Get all of the objectives for the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objectives()
    {
        return $this->hasMany(SubjectLearningObjective::class, 'subject_id', 'id');
    }
}
