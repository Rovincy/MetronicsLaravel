<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('token-name')->plainTextToken;
        // return response()->json(['token' => $token], 200);
        return redirect()->intended('/');
    }
     
    $erroeM = "Invalid credentials";

    return redirect()->intended('/login');
    // return response()->json(['message' => 'Invalid credentials'], 401);
}

}
