<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Character;

class CheckActiveCharacter
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next)
  {

    $user = Auth::user();

    if(!$user->hasCharacters())
    {

      return $next($request);

    }

    if($user->active_character_id > 0)
    {

      return $next($request);

    }

    $main_character = Character::where([
      ['main_character', '=', true],
      ['user_id', '=', $user->id]
    ])->first();

    $user->setActiveCharacter($main_character);

    return $next($request);
  }
}
