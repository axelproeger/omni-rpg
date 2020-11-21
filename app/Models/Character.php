<?php

namespace App\Models;

use App\Settings;
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rank()
  {
    return $this->belongsTo('App\Models\Rank');
  }

  public function positions()
  {
      return $this->hasMany('\App\Models\Positionable', 'character_id');
  }

    /**
     * @return string
     */
    public function getFullNameAttribute()
  {
    return "{$this->firstname} {$this->lastname}";
  }

    /**
     * @param $value
     * @return string
     */
    public function getBirthdayAttribute($value)
  {

    return Carbon::parse($value)->format('d.m.Y') . " (" . Carbon::parse($value)->add(-Settings::get('rs-timediff'), 'year')->age . ")";
  }

    /**
     * @param $value
     * @return string
     */
    public function getHeightAttribute($value)
  {
    return "{$value} cm";
  }

    /**
     * @param $value
     * @return string
     */
    public function getWeightAttribute($value)
  {
    return "{$value} kg";
  }

    /**
     * @param $value
     * @return \Illuminate\Support\HtmlString|string
     */
    public function getCvAttribute($value)
  {
    if (empty($value)) {
      return "Hier gibt es (noch) nichts zu sehen.";
    }

    return Markdown::parse($value);
  }

    /**
     * @return false
     */
    public function getRankName()
  {
    return ($this->rank) ? $this->rank->name : false;
  }

    /**
     * @return false
     */
    public function getRankShortName()
  {
    return ($this->rank) ? $this->rank->short_name : false;
  }

    /**
     * @return bool
     */
    public function hasAvatar()
  {
    if($this->avatar && Storage::disk('public')->exists('character_avatars/' . $this->avatar)) {
        return true;
    }

    return false;
}

    /**
     * @return mixed
     */
    public function getAvatarPath()
    {

        if($this->hasAvatar()) {
            return Storage::disk('public')->url('character_avatars/' . $this->avatar);
        }

        return Storage::disk('public')->url('character_avatars/default.png');

    }

    /**
     * @return mixed|string
     */
    public function getAvatarFilename()
    {

        if($this->hasAvatar()) {

            return $this->avatar;

        }

        return 'default.png';

    }
}
