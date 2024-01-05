<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use RealRashid\SweetAlert\Facades\Alert;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
    return view('landing.Home');
});

Route::get('/login', LandingController::class . '@login')->name('auth.login');

//Route::get('/login', [LoginController::class, 'index']);

Route::post('/check', [LoginController::class, 'check'])->name('check');

Route::get('/registration', LoginController::class . '@registration')->name('auth.registration');

Route::get('/logout' , [LandingController::class, 'logout'])->name('logout');

Route::post('/registration', [RegistrationController::class, 'registerUser'])->name('auth.register');