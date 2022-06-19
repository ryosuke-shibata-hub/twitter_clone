<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetsController extends Controller
{
    //
    public function store()
    {

        $attribute = request()->validate([
            'body' => 'required|max:255',
        ]);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attribute['body'],
        ]);

        return redirect()->route('home');
    }
}