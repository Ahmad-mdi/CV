<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\profile\ProfileEditRequest;
use App\Http\Services\profile\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('panel.profile.show',[
           'user' => auth()->user(),
        ]);
    }

    public function edit()
    {
        return view('panel.profile.edit',[
            'user' => auth()->user(),
        ]);
    }

    public function update(ProfileEditRequest $request,ProfileService $service)
    {
        $service->update($request);
        return back();
    }
}
