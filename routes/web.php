<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::post('/process_signup', [UserController::class, 'store']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout']);

// Route::middleware(['auth'])->group(function(){
//     Route::view('/dashboard', 'dashboard');
//     Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
//     Route::patch('/profile/update', [DashboardController::class, 'update_profile'])->name('profile.update');
// });

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::patch('/profile/update', [DashboardController::class, 'update_profile'])->name('profile.update');
    Route::get('/dashboard/loan', [DashboardController::class, 'loan'])->name('dashboard.loan');
    Route::post('/apply/loan', [DashboardController::class, 'apply_loan'])->name('apply.loan');
    Route::delete('/delete/loan/{loan}', [DashboardController::class, 'delete_loan'])->name('delete.loan');
    Route::patch('/edit/loan/{loan}', [DashboardController::class, 'edit_loan'])->name('edit.loan');

});