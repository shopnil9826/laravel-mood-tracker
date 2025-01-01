<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mood extends Model
{
    protected $fillable = ['name', 'color'];

    // Get the entries for a specific mood.
    public function entries(): HasMany
    {
        return $this->hasMany(Entry::class);
    }

    // Clear moods cache upon modifying a mood entry
    protected static function boot()
    {
        parent::boot();

        static::saving(function() {
            Cache::forget('moods');
        });
    }
}
