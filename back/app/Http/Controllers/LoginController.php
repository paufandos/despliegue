<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json('Credenciales no válidas', 401);
        }else{
            return response()->json(['token' => $user->createToken($user->email,['*'],now()->addMinutes(30))->plainTextToken], 200);
        }
    }
}
