<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [AuthController::class, 'index'])->name('/');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth-login', [AuthController::class, 'postLogin'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/auth-register', [AuthController::class, 'postRegister'])->name('auth.register');

Route::get('/users', [AuthController::class, 'users'])->name('users');


Route::get('/logout', [AuthController::class, 'auth_Logout'])->name('logout');
