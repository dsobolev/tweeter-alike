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
        Auth::user()->toggleFollow($user);

        return response('OK', 200);
    }

    public function edit(User $user)
    {
        abort_if( $user->isNot(Auth::user()), 403 );

        return view('profiles.edit', compact('user'));
    }
}
