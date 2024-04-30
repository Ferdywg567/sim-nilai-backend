<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class P5Dimension extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the elements for the P5Dimension
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function elements(): HasMany
    {
        return $this->hasMany(P5DimensionElement::class, 'dimension_id', 'id');
    }
}
