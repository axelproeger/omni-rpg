<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Character;
use App\Models\User;

class ActiveCharacterController extends Controller
{

  public function set(Character $character)
  {

    Auth::user()->setActiveCharacter($character);

    $this->flashSuccess('OK', 'Charakter gewechselt.');

    return redirect()
      ->back();
  }

}
