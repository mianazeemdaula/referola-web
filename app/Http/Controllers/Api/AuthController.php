<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::find(Auth::id());
            // $user->tokens()->delete();
            $user['token'] = $user->createToken('referola')->plainTextToken;
            return response()->json($user);
        }
        return response()->json(['message' => 'User account not found']);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'user_type' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type_id = $request->user_type;
        $user->save();
        $user['token'] = $user->createToken('referola')->plainTextToken;
        return response()->json($user);
    }
}
