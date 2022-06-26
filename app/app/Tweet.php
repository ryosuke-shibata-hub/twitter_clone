<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Like;

class Tweet extends Model
{
    use Likeable;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}