<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        $token = $request->createToken('token-name');

        return response()->json([
            'message' => "Created Successfully",
            'user' => $user,
             'token' => $token->plainTextToken
        ]);


    }



    public function login(Request $request)

    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Incorrect crendentials'
            ]);
        }

        $token = $request->user()->createToken('token-name');

        return response()->json([
            'success'=>true,
            'user'=>Auth::user(),
            'token' => $token->plainTextToken,
        ]);
    }
}


