<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5DimensionSubElement extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the phases for the P5DimensionSubElement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phases()
    {
        return $this->hasMany(P5DimensionSubElementPhase::class, 'subelement_id', 'id');
    }

    /**
     * Get the element that owns the P5DimensionSubElement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function element()
    {
        return $this->belongsTo(P5DimensionElement::class, 'element_id', 'id');
    }
}
