<?php

namespace App;

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
    return $this->belongsTo('App\RankGroup');
  }

  public function characters() {
    return $this->hasMany('App\Character');
  }

}
