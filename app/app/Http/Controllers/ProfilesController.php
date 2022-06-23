<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function show(User $user)

    {
        return view('profiles.show',[
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {

        // // abort_if($user->isNot(current_user()),404);
        // $this->authorize('edit',$user);

        return view('profiles.edit',[
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        // dd(request('avatar'));
        $attirbute = request()->validate([
            'username' => ['bail','required','string','max:255','unique:users','alpha_dash'],
            'name' => ['bail','required','string','max:255'],
            'avatar' => ['bail','required','file'],
            'email' => ['bail','required','email','max:255','unique:users'],
            'password' => ['bail','required','min:8','max:255','confirmed'],
        ]);

        $attirbute['avatar'] = request('avatar')->store('avatars');

        $user->update($attirbute);

        return redirect($user->path());
    }
}