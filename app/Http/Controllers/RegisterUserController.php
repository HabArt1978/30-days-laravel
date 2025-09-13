<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // валидация данных
        $validatedAttributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:265'],
            'password' => ['required', Password::min(8)->letters()->numbers(), 'confirmed'],
        ]);
        // создание нового пользователя
        $newUser = User::create($validatedAttributes);
        // вход пользователя в систему
        Auth::login($newUser);
        // redirect
        return redirect('/jobs');
    }
}
