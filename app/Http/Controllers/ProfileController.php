<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.single', [
            'user' => $user,
            'tweets' => $user->timeline()
        ]);
    }
}
