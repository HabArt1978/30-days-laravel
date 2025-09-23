<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'email' => ['required', 'email', 'max:265'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($validatedAttributes)) {
            return back()->withErrors([
                'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
