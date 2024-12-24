<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'env_key',
    ];

    // Override boot method
    protected static function boot()
    {
        parent::boot();

        // When a setting is updated, update the .env file
        static::updated(function ($setting) {
            // Get settings key and value from the database and push to cache
            $settings = static::all();
            $settings = $settings->pluck('value', 'key')->toArray();
            cache()->forever('settings', $settings);
        });
    }
}
