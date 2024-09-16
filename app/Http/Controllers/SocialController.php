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
        if($social == 'github'){
            return Socialite::driver($social)->redirect();
        }else{
            dd('this social is not active yet');
           }
    }
    public function callback($social){
        $socialUser = Socialite::driver($social)->stateless()->user();


           if($social == 'github'){
            $user = User::firstOrCreate(
                [
                    'email' => $socialUser->email
                ],
                [
                    'github_id' => $socialUser->id,
                    'name' => $socialUser->name ?? $socialUser->nickname,
                    'github_token' => $socialUser->token,
                    'github_refresh_token' => $socialUser->refreshToken,
                    'password' => Hash::make(Str::random(30)),
                ]
        );

           }else{
            dd('this social is not active yet');
           }


        Auth::login($user);

        return redirect()->route('job.index');
    }
}
