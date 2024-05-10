<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5DimensionElement extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the subs for the P5DimensionElement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subs()
    {
        return $this->hasMany(P5DimensionSubElement::class, 'element_id', 'id');
    }

    /**
     * Get the dimension that owns the P5DimensionElement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dimension()
    {
        return $this->belongsTo(P5Dimension::class, 'dimension_id', 'id');
    }
}
