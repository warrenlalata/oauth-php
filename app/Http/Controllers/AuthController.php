<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        $currentUser = $request->user();
        $currentUser->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
