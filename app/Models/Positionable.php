<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positionable extends Model
{
    public function character()
    {
        return $this->belongsTo('\App\Models\Character', 'character_id');
    }

}
