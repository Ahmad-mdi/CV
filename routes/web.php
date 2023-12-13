<?php

use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\panel\PanelController;
use Illuminate\Support\Facades\Route;

//home:
Route::get('/',[HomeController::class,'index']);
Route::get('/adminPanel',[PanelController::class,'index']);
