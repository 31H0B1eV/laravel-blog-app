<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
