<?php
namespace App\Traits;

use App\Models\User;

trait Followable
{
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(int $user_id)
    {
        return $this->follows()->attach($user_id);
    }
}