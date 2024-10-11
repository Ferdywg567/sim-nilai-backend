<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5Group extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the coordinator that owns the P5Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coordinator()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    /**
     * The students that belong to the P5Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    /**
     * The projects that belong to the P5Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(P5Project::class, 'p5_group_p5_project', 'p5_group_id', 'p5_project_id', 'id', 'id');
        // return $this->belongsToMany(P5Project::class);
    }

    /**
     * The latest project that belong to the P5Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function latestProject()
    {
        return $this->projects()->latest();
    }

    function setCoordinator(Guru $guru)
    {
        $this->guru_id = $guru->id;

        $this->save();
    }
}
