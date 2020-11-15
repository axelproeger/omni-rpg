<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;
use App\Models\Character;

class User extends Authenticatable
{
  use Notifiable;
  use HasRoles;

  private $active_character = null;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = [
    'created_at',
    'updated_at',
    'last_action'
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'slug', 'last_action', 'avatar'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function characters()
  {

    return $this->hasMany('App\Models\Character')->where('active', true);
  }

  public function active_character()
  {

    if ($this->active_character == null) {
      $this->active_character = Character::find($this->active_character_id);
    }

    return $this->active_character;
  }

  public function setActiveCharacter(Character $character)
  {
    $this->active_character_id = $character->id;
    $this->save();
  }

  public function isOnline()
  {
    return Cache::has('user-is-online-' . $this->id);
  }

  public function hasCharacters()
  {

    return $this->characters->isNotEmpty();
  }

  public function countCharacters()
  {

    return $this->characters->count();
  }


  public function getAvatarAttribute($value)
  {
    return Storage::disk('public')->url('user_avatars/' . $value);
  }

  public function getBirthDateAttribute($value)
  {
    return Carbon::parse($value)->format('d.m.Y') . " (" . Carbon::parse($value)->age . ")";
  }

}
