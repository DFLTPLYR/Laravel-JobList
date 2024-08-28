<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $Attributes = request()->validate([
            'firstName' => ['required', 'min: 3'],
            'lastName' => ['required', 'min: 3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(2)]
        ]);

        $user = User::create($Attributes);

        Auth::login($user);

        return redirect('/Jobs');
    }
}
