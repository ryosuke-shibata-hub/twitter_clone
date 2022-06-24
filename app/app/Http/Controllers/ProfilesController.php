<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show',[
            'user' => $user,
            'tweets' => $user->tweets()->paginate(50),
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
            'username' => ['bail','required','string','max:255','alpha_dash',Rule::unique('users')->ignore($user),],
            'name' => ['bail','required','string','max:255'],
            'avatar' => ['bail','file'],
            'email' => ['bail','required','email','max:255',Rule::unique('users')->ignore($user),],
            'password' => ['bail','required','min:8','max:255','confirmed'],
        ]);

        if(request('avatar')) {
            $attirbute['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attirbute);

        return redirect($user->path());
    }
}