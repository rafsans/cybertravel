<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $user->setRememberToken(Str::random(60));
            $user->save();
            Session::put('email',$request->email);
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registerForm()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|string',
        //     'telepon' => 'required',
        //     'asal' => 'required|string',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'asal' => $request->asalKota,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
