<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Like;

class Tweet extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function like($user = null,$liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),],
            [
            'liked' => $liked,
        ]);
    }

    public function disliked()
    {
       return $this->like(false);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}