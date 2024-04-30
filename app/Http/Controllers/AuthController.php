<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$request->authenticate()) {
            return $this->sendError('Maaf, Email atau Password Anda Salah.');
        }

        $token = $user->createToken('ApiToken')->plainTextToken;

        $response = [
            'user'      => $user,
            'token'     => $token
        ];

        return $this->sendResponse($response, "Selamat Datang, $user->name!");
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();

        return $this->sendSuccess("Berhasil Logout Dari Sistem!");
    }

    public function getUser() {
        $data = [
            'user' => Auth::user()
        ];
        return $this->sendResponse($data, 'Ini Profil Anda.');
    }
}
