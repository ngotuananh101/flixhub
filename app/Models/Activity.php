<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity as ModelsActivity;

class Activity extends ModelsActivity
{
    // override boot method
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->causer_id)) {
                $user = User::find(1);
                $model->causer()->associate($user);
            }
        });
    }
}
