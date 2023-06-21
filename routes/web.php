<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::post('/process_signup', [UserController::class, 'store']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout']);