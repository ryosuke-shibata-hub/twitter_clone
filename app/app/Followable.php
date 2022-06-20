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
    public function follows()
    {
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }

    public function Following()
    {

    }

}