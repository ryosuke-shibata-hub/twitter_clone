<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->like(current_user());

        return back();
    }

    public function destory(Tweet $tweet)
    {
        $tweet->disliked(current_user());

    return back();
    }
}