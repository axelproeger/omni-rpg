<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Character;

class CharacterController extends Controller
{

  public function index()
  {
    $user = auth()->user();
    $characters = $user->characters->groupBy('type');

    return view('characters.index', compact('characters'));
  }

  public function create()
  {

    //$this->authorize('create', Character::class);
    return view('characters.create');
  }


  public function store(Request $request)
  {

    $this->authorize('create', Character::class);

    $validatedData = $request->validate([
      'firstname' => 'required|max:255',
      'lastname' => 'max:255',
      'birthday' => 'date_format:Y-m-d',
      'birthplace' => 'max:255',
      'home_planet' => 'max:255',
      'family_status' => '',
      'father' => 'max:255',
      'mother' => 'max:255',
      'siblings' => 'max:255',
      'children' => 'max:255',
      'gender' => '',
      'species' => 'max:255',
      'stature' => 'max:255',
      'hair_color' => 'max:255',
      'eye_color' => 'max:255',
      'height' => 'nullable|numeric|digits_between:2,3',
      'weight' => 'nullable|numeric|digits_between:2,3',
      'physical_characteristics' => '',
      'race_characteristics' => '',
      'strengths' => '',
      'weaknesses' => '',
      'characteristics' => '',
      'interests' => '',
      'cv' => ''
    ]);

    $character = new Character;

    $character->active = true;
    $character->user_id = auth()->user()->id;
    $character->firstname = $validatedData['firstname'];
    $character->lastname = $validatedData['lastname'];
    $character->slug = Str::slug($validatedData['firstname'] . ' ' . $validatedData['lastname'], '-');
    $character->birthday = $validatedData['birthday'];
    $character->birthplace = $validatedData['birthplace'];
    $character->home_planet = $validatedData['home_planet'];
    $character->family_status = $validatedData['family_status'];
    $character->father = $validatedData['father'];
    $character->mother = $validatedData['mother'];
    $character->siblings = $validatedData['siblings'];
    $character->children = $validatedData['children'];
    $character->gender = $validatedData['gender'];
    $character->species = $validatedData['species'];
    $character->stature = $validatedData['stature'];
    $character->hair_color = $validatedData['hair_color'];
    $character->eye_color = $validatedData['eye_color'];
    $character->height = $validatedData['height'];
    $character->weight = $validatedData['weight'];
    $character->physical_characteristics = $validatedData['physical_characteristics'];
    $character->race_characteristics = $validatedData['race_characteristics'];
    $character->strengths = $validatedData['strengths'];
    $character->weaknesses = $validatedData['weaknesses'];
    $character->characteristics = $validatedData['characteristics'];
    $character->interests = $validatedData['interests'];
    $character->cv = $validatedData['cv'];

    if (auth()->user()->characters->count() == 0) {
      $character->main_character = true;
    }

    $character->save();

    return redirect('/characters');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Character $character)
  {
    return view('characters.show', ['character' => $character]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Character  $rank
   * @return \Illuminate\Http\Response
   */
  public function edit(Character $character)
  {
    return view('characters.edit', ['character' => $character]);
  }
}
