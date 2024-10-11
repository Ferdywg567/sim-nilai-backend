<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Pembuatan Keripik Singkong Aneka Rasa
    // Membangun Jiwa Wirausaha Sejak Dini


    /**
     * Get the theme that owns the P5Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function theme()
    {
        return $this->belongsTo(P5Theme::class, 'p5_theme_id', 'id');
    }

    /**
     * Get all of the targets for the P5Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function targets()
    {
        return $this->hasMany(P5ProjectTargetProfileAchievement::class, 'project_id', 'id');
    }

    /**
     * The phases that belong to the P5Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function phases()
    {
        return $this->belongsToMany(P5DimensionSubElementPhase::class, P5ProjectTargetProfileAchievement::class, 'p5_project_id', 'p5_phase_id');
    }
}
