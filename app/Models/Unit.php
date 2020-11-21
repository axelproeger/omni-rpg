<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function group() {
        return $this->belongsTo('\App\Models\UnitGroup');
    }

    public function positions() {
        return $this->morphToMany('App\Models\Position', 'positionable')
            ->withPivot('from', 'till', 'character_id');
    }
}
