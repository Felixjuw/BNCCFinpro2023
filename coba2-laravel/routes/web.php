<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/login', function () {

//     return view('login');
// });

// Route::get('/registrasi', function () {
//     return view('registrasi');
// });

Route::get('/', [SessionController::class, 'login'])->name('login-display');
Route::post('/postlogin', [SessionController::class, 'loginlogic'])->name('login-user');
Route::get('/welcome', [SessionController::class, 'welcome']);
Route::get('/registrasi', [SessionController::class, 'registrasi'])->name('register-display');
Route::post('/register-users', [SessionController::class, 'registerUser'])->name('register-user');