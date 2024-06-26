<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class P5DimensionSubElementPhase extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the subElement that owns the P5DimensionSubElementPhase
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subElement()
    {
        return $this->belongsTo(P5DimensionSubElement::class, 'subelement_id', 'id');
    }
}
