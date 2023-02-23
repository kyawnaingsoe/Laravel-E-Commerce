<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'login')-> name('login');
Route::post('/',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout'])->name('user-logout');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::get('/',fn()=>view('admin.home'))->name('admin-home');
    Route::resource('cats',CategoryController::class);
});

