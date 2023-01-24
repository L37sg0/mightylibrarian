<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Http\Requests\Register;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public $path            = 'auth';
    public $labelLogin      = 'Login';
    public $labelRegister   = 'Register';

    public function login(Login $request) {

    }

    public function register(Register $request) {

    }

    public function logout(Request $request) {

    }
}
