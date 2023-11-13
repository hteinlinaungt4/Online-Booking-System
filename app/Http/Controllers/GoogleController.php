<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function signInwithGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackToGoogle(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('gauth_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('/admin/admin');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gauth_id' => $user->id,
                    'gauth_type' => 'google',
                    'password' => encrypt('admin@123')
                ]);
                Auth::login($newUser);
                return redirect()->route('admin/admin');
            }
        } catch (Exception $e) {
            dd($e->getFile());
        }
    }
}
