<?php

namespace App\Http\Controllers;

// use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UsersController extends Controller
{
    public function index() {
        return view('users.index')->with('users', User::all());
    }

    public function create() {
        return view('users.create');
    }

    public function makeAdmin(User $user) {
        $user->role = 'admin';
        $user->save();
        return redirect(route('users.index'));
    }

    public function edit(User $user) {
        $profile = $user->profile;
        return view('users.profile', ['user' => $user, 'profile' => $profile]);
    }

    public function update(User $user, Request $request) {
        $profile = $user->profile;
        $data = $request->all();
        if ($request->hasFile('picture')) {
            $picture = $request->picture->store('profilesPicture', 'public');
            $data['picture'] = $picture;
        }
        $profile->update($data);
        return redirect(route('home'));
    }
}
