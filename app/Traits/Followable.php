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

    public function toggleFollow(User $user)
    {
        if ($this->following($user)) {
            return $this->unfollow($user);
        } else {
            return $this->follow($user);
        }
    }

    public function following(User $user)
    {
        return $this->follows->contains($user);

        // the more performant one
        // $this->follows()->where('following_user_id', $user->id)->exists;
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user->id);
    }

    public function followPath()
    {
        return route('follow', $this);
    }
}