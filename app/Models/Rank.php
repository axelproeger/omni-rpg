<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'rank_group_id', 'name', 'short_name'
  ];

  public function rank_group() {
    return $this->belongsTo('App\Models\RankGroup');
  }

  public function characters() {
    return $this->hasMany('App\Models\Character');
  }

}
