<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator as FacadesValidator;


class LoginController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $validator=FacadesValidator::make($request->all(),[
            "email"=>'required|email|max:255',
            "password"=>'required|string|min:8|max:255',
        ]);
        if($validator->fails()){
            return response()->json([
                "message"=>$validator->messages(),
            ],300);
        }

        $user=User::where('email',$request->email)->first();
        if(! $user || ! Hash::check($request->password, $user->password)){
            return response()->json([
                "message"=>"credentials dont match",
            ],400);
        }
        $token=$user->createToken($user->name."Auth-Token")->plainTextToken;//could be any random value
        return response()->json([
            "message"=>"login success!",
            "token_type"=>"Bearer",
            "token"=>$token,
        ],200);

    }
}
