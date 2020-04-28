<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiResponse;

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            $data['message'] = $errors->first();
            return response()->json($this->errorResponse($data), 422);
        }
        if (Auth::attempt($request->all())) {
            $user = Auth::user();
            $data['user'] = $user;
            $data['token'] = $user->createToken('pizza')->accessToken;
            return response()->json($this->successResponse($data), 200);
        }
        $data['message'] = 'Invalid login details';
        return response()->json($this->errorResponse($data), 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            $data['message'] = $errors->first();
            return response()->json($this->errorResponse($data), 422);
        }
        $inputs['name'] = $request->name;
        $inputs['email'] = $request->email;
        $inputs['password'] = bcrypt($request->password);
        $user = User::create($inputs);
        $data['user'] = $user;
        $data['token'] = $user->createToken('pizza')->accessToken;
        return response()->json($this->successResponse($data), 200);
    }
}
