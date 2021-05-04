<?php

namespace App\Http\Controllers;

use App\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    public function storeLike(Tweet $tweet)
    {
        $tweet->like(current_user());
        return back();
    }

    public function storeDislike(Tweet $tweet)
    {
        $tweet->dislike(current_user());
        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->unlike(current_user());
        return back();
    }
}
