<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Mail\Markdown;

use function PHPSTORM_META\type;

class Character extends Model
{

  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyName()
  {
    return 'slug';
  }

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = [
    'created_at',
    'updated_at',
    'birthday'
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'firstname',
    'email',
    'password'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'active',
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function rank()
  {
    return $this->belongsTo('App\Rank');
  }

  // public function getAvatarAttribute($value)
  // {
  //   return Storage::disk('public')->url('character_avatars/'. $value);
  // }

  public function getFullNameAttribute()
  {
    return "{$this->firstname} {$this->lastname}";
  }

  public function getBirthdayAttribute($value)
  {
    return Carbon::parse($value)->format('d.m.Y') . " (" . Carbon::parse($value)->age . ")";
  }

  public function getHeightAttribute($value)
  {
    return "{$value} cm";
  }

  public function getWeightAttribute($value)
  {
    return "{$value} kg";
  }

  public function getCvAttribute($value)
  {
    if (empty($value)) {
      return "Hier gibt es (noch) nichts zu sehen.";
    }

    return Markdown::parse($value);
  }

  public function getRankName()
  {
    return ($this->rank) ? $this->rank->name : false;
  }

  public function getRankShortName()
  {
    return ($this->rank) ? $this->rank->short_name : false;
  }

  public function getAvatar($type = 'url')
  {
    if($type == 'path')
    {
      return Storage::disk('public')->url('character_avatars/'. $this->avatar);
    }

    return $this->avatar;
  }

}
