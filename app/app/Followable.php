<?php

namespace App;

use App\User;
/**
 *
 */
trait Followable
{

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function togglefollow(User $user)
    {
        if($this->Following($user)) {
            return $this->unfollow($user);
        }
            return $this->follow($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }

    public function Following(User $user)
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }

}