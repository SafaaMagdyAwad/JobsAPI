<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
class LogoutController extends Controller
{
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
}
