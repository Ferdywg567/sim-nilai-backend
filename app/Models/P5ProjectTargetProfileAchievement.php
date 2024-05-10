<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5ProjectTargetProfileAchievement extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the project that owns the P5ProjectTargetProfileAchievement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(P5Project::class, 'p5_project_id', 'id');
    }

    /**
     * Get the phase that owns the P5ProjectTargetProfileAchievement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phase()
    {
        return $this->belongsTo(P5DimensionSubElementPhase::class, 'p5_phase_id', 'id');
    }
}
