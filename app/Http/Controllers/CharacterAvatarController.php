<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Character;
use App\Models\User;

class CharacterAvatarController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param Character $character
     * @return Response
     */
    public function show(Character $character)
    {
        return view('characters.avatar', ['character' => $character]);
    }


    /**
     * Update the avatar for the character.
     *
     * @param Request $request
     * @param Character $character
     * @return Response
     */
    public function update(Request $request, Character $character)
    {

        $request->validate([
            'avatar' => ['required', 'mimes:jpeg,jpg,png', 'dimensions:ratio=1/1', 'max:2048']
        ]);

        if ($character->hasAvatar()) {
            Storage::disk('public')->delete('character_avatars/' . $character->getAvatarFilename());
        }

        Storage::disk('public')->putFile('character_avatars', $request->file('avatar'));

        $character->avatar = $request->file('avatar')->hashName();
        $character->save();

        return redirect()->back();
    }

    /**
     * Delete the avatar for the character.
     *
     * @param Character $character
     */
    public function delete(Character $character)
    {

        if ($character->hasAvatar()) {

            Storage::disk('public')->delete('character_avatars/' . $character->getAvatarFilename());

            $character->avatar = NULL;
            $character->save();

        }

        return redirect()->back();

    }
}
