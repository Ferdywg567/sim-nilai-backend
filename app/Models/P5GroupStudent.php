<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5GroupStudent extends Model
{
    use HasFactory;

    protected $tables = 'student_p5_group';
    protected $guarded = [];

    /**
     * Get the group that owns the P5GroupStudent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(P5Group::class, 'p5_group_id', 'id');
    }

    /**
     * Get the student that owns the P5GroupStudent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
