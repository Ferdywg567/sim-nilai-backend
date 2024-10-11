<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the guru that owns the Teaching
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    /**
     * Get the subject that owns the Teaching
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    /**
     * Get the studyClass that owns the Teaching
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studyClass()
    {
        return $this->belongsTo(StudyClass::class, 'study_class_id', 'id');
    }
}
