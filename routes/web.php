<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\panel\PanelController;
use App\Http\Controllers\panel\ProfileController;
use Illuminate\Support\Facades\Route;

//home:
Route::get('/',[HomeController::class,'index']);
Route::delete('/logout',[AuthController::class,'logout']);

//panel:
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/',[PanelController::class,'index']);
    Route::get('/profile',[ProfileController::class,'show']);
    Route::get('/profile/edit',[ProfileController::class,'edit']);
    Route::put('/profile/update',[ProfileController::class,'update']);
});

//auth:
Route::middleware('guest')->group(function (){
    Route::get('/login',[AuthController::class,'indexLogin']);
    Route::post('/login',[AuthController::class,'login'])->name('login');
    Route::get('/signup',[AuthController::class,'indexSignup']);
    Route::post('/signup',[AuthController::class,'signup']);
});
