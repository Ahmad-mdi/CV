<?php


namespace App\Http\Services\profile;


use Illuminate\Http\Request;

class ProfileService
{
    public function update(Request $request)
    {
        $user = auth()->user();
        $user->update([
           'name' => $request->get('name'),
           'lastName' => $request->get('lastName'),
           'github_link' => $request->get('github_link'),
           'linkedin_link' => $request->get('linkedin_link'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
           'about' => $request->get('about'),
        ]);
    }
}
