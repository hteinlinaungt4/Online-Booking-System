<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //login page

    public function loginPage()
    {
        return view('login');
    }

    public function registerPage()
    {
        return view('register');
    }

    public function dashboard()
    {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('home#page');
        }
        return redirect()->route('user#home');
    }
}
