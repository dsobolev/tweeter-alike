<?php
namespace App\Traits;

use App\Models\User;

trait Followable
{
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(User $user)
    {
        return $this->follows()->attach($user->id);
    }

    public function following(User $user)
    {
        return $this->follows->contains($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user->id);
    }
}