<?php
namespace App\Http\Controllers\panel;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        return view('panel.index',[
            'user' => auth()->user(),
        ]);
    }
}
