<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.single', [
            'user' => $user,
        ]);
    }

    public function follow(Request $request, User $user)
    {
        Auth::user()->follow($user);

        return back();
    }
}
