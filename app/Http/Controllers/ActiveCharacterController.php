<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Character;
use App\User;

class ActiveCharacterController extends Controller
{

  public function set(Character $character)
  {

    Auth::user()->setActiveCharacter($character);

    return redirect()
      ->back()
      ->withMessage('success|Charakter gewechselt.');
  }

}
