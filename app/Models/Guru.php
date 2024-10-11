<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the teachings for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachings()
    {
        return $this->hasMany(Teaching::class, 'guru_id', 'id');
    }
}
