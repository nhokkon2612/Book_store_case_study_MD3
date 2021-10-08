<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('layouts.master');
});
Route::get('/register', function () {
    return view('Register.register');
})->name('showFormRegister');

Route::get('/login', [LoginController::class, 'showLogin'])->name('showFormLogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/change-password', [LoginController::class, 'showChangePassword'])->name('show.changePassword');
Route::post('/change-password', [LoginController::class, 'changePassword'])->name('changePassword');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

