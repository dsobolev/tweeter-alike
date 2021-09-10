<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the profile.
     *
     * @param  \App\Models\User  $thisUser  Authenticated one
     * @param  \App\Models\User  $profile   User model to update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $thisUser, User $profile)
    {
        return $thisUser->is($profile);
    }

}
