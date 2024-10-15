<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('email', $user->email)->first();


            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('client.index');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect()->route('client.index');
            }
        } catch (\Exception $e) {

            dd($e->getMessage());
        }
    }
}
