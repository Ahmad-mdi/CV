<?php

namespace App\Http\Controllers;

use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\SignupRequest;
use App\Http\Services\auth\AuthService;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('auth.login');
    }
    public function indexSignup()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequest $request , AuthService $service)
    {
        $service->signup($request);
//        return back()->with('successSignup','Your registration was successful');
        return redirect('/');
    }

    public function login(LoginRequest $request,AuthService $service)
    {
        $service->login($request);
        return redirect('/admin');
    }

    public function logout(AuthService $service)
    {
        $service->logout();
        return redirect('/login');
    }
}
