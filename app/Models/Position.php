<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function units()
    {
        return $this->morphedByMany('App\Models\Unit', 'positionable');
    }

    public function departments()
    {
        return $this->morphedByMany('App\Models\Department', 'positionable');
    }

}
