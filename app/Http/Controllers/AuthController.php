<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('R-Token')->plainTextToken;

        $response = [
            'korisnik ' => $user,
            'token ' => $token,
        ];

        return response()->json($response);
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response('Uneti email ili password je pogrešan');
        } else {
            $token = $user->createToken('L-Token')->plainTextToken;
            $response = [
                'korisnik ' => $user,
                'token ' => $token
            ];
            return response()->json($response);
        }
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Korisnik je izlogovan');
    }
}
