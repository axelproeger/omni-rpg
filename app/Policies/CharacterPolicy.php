<?php

namespace App\Policies;

use App\Models\Character;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CharacterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any characters.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }


    /**
     * Determine whether the user can create characters.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

        if($user->countCharacters() >= $user->character_slots) {
          return false;
        }

        return true;
    }

    /**
     * Determine whether the user can update the character.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Character  $character
     * @return mixed
     */
    public function update(User $user, Character $character)
    {
        //
    }

    /**
     * Determine whether the user can delete the character.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Character  $character
     * @return mixed
     */
    public function delete(User $user, Character $character)
    {
        //
    }

    /**
     * Determine whether the user can restore the character.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Character  $character
     * @return mixed
     */
    public function restore(User $user, Character $character)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the character.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Character  $character
     * @return mixed
     */
    public function forceDelete(User $user, Character $character)
    {
        //
    }
}
