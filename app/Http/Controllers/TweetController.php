<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function store(Request $request)
    {
        $validData = $request->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $validData['body']
        ]);

        return redirect( route('dashboard') );
    }
}
