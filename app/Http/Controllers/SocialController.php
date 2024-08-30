<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirect($social){
        return Socialite::driver($social)->redirect();
    }
    public function callback($social){
        $socialUser = Socialite::driver($social)->stateless()->user();

        $user = User::where('email', $socialUser->email)->first();
            if (!$user) {
                // Create the user if they don't exist
                $user = User::create([
                    'name' => $socialUser->name ?? $socialUser->nickname,
                    'email' => $socialUser->email,
                    $social.'_id' => $socialUser->id,
                    $social.'_token' => $socialUser->token,
                    $social.'_refresh_token' => $socialUser->refreshToken,
                    'password' => Hash::make(Str::random(30)), // Generate a random password
                ]);
            } else {
                // If user exists, update their GitHub tokens
                $user->update([
                    $social.'_id' => $socialUser->id,
                    $social.'_token' => $socialUser->token,
                    $social.'_refresh_token' => $socialUser->refreshToken,
                ]);
            }


        Auth::login($user);

        return redirect()->route('job.index');
    }
}
