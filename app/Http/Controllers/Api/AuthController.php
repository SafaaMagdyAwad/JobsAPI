<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;
//refrence not used
class AuthController extends Controller
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
    public function register(Request $request): JsonResponse
    {
        $validator=FacadesValidator::make($request->all(),[
            "name"=>'required|string|max:255',
            "email"=>'required|email|unique:users,email|max:255',
            "password"=>'required|string|min:8|max:255',
        ]);
        if($validator->fails()){
            return response()->json([
                "message"=>$validator->messages(),
            ],300);
        }
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        if($user){
            $token=$user->createToken($user->name."Auth-Token")->plainTextToken;//could be any random value
            return response()->json([
                "message"=>"registration success!",
                "token_type"=>"Bearer",
                "token"=>$token,
            ],200);
        }else{
            return response()->json([
                "message"=>"Somethog Went wrong!",
            ],500);
        }

    }
    public function logout(Request $request): JsonResponse
    {

        $user=User::where('id',$request->user()->id)->first();
        if($user){
            $user->tokens()->delete();
            return response()->json([
                "message"=>"Loged out success",
            ],200);
        }
        return response()->json([
            "message"=>"un Known user",
        ],200);

    }
    public function profile(Request $request): JsonResponse
    {
        //$request->user() is the logedin user
        if($request->user()){
            return response()->json([
                "message"=>"profile fetched",
                "data"=>$request->user(),
            ],200);
        }else{
            return response()->json([
                "message"=>"Some thing went wrong",
            ],500);
        }

    }
}
