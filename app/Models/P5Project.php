<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the theme that owns the P5Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function theme()
    {
        return $this->belongsTo(P5Theme::class, 'theme_id', 'id');
    }
}
