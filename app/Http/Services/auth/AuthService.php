<?php


namespace App\Http\Services\auth;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function signup(Request $request)
    {
        User::query()->create([
            'fullName' => $request->get('fullName'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => bcrypt($request->get('password')),
        ]);
    }

    public function login(Request $request)
    {
        $user = User::query()->where('phone',$request->get('phone'))->firstOrFail();
        if (!Hash::check($request->get('password'),$user->password)) {
            return back()->with('notLogin','the password is incorrect!');
        }
        auth()->login($user);
    }

    public function logout()
    {
        auth()->logout();
    }
}

