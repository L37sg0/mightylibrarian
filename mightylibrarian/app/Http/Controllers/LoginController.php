<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public $path            = 'auth';
    public $labelLogin      = 'Login';
    public $labelRegister   = 'Register';

    public function login(Login $request) {
        if (Auth::attempt([
            User::FIELD_NAME        => $request->get(User::FIELD_NAME),
            User::FIELD_PASSWORD    => $request->get(User::FIELD_PASSWORD)
        ])) {
            return redirect(route('dashboard'));
        } else {
            return redirect()->back()->withErrors([
                User::FIELD_NAME => 'Invalid username or password'
            ]);
        }
    }

    public function register(Register $request) {
        $user = new User();
        $user->fill([
            User::FIELD_NAME        => $request->get(User::FIELD_NAME),
            User::FIELD_EMAIL       => $request->get(User::FIELD_EMAIL),
            User::FIELD_PASSWORD    => Hash::make($request->get(User::FIELD_PASSWORD))
        ]);
        $user->save();

        return redirect(route('dashboard'));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'));
    }
}
