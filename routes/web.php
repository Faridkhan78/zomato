<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::view('/example-page', 'example-page');


// Route::view('/login','login')->name('login');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');
//Route::view('/login','example-auth');

// Route::view('/registration','register');

Route::view('register', 'register')->name('register');
//Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login', 'login')->name('login');

Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');

Route::get('logout', [UserController::class, 'logout'])->name('logout');


Route::view('basic-table', 'basic-table')->name('basic-table');

Route::get('basic-table',[UserController::class,'viewUserall'])->name('basic-table');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::view('basic-table12', 'basic-table')->name('basic-table12');

Route::get('basic-table12',[UserController::class,'viewUserall'])->name('basic-table12');




