<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

class UserLastAction
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

    if (Auth::check()) {

      $now = Carbon::now();
      $user = Auth::user();

      $user->last_action = $now;
      $user->timestamps = false;
      $user->save();
        
      $expiresAt = $now->addMinutes(5);
      Cache::put('user-is-online-' . $user->id, true, $expiresAt);
    }

    return $next($request);
  }
}
