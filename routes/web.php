<?php

use App\Http\Controllers\Admins\BookController;
use App\Http\Controllers\Admins\CategorieController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\CustomerController;
use App\Http\Controllers\Admins\PublisherController;
use App\Http\Controllers\Admins\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\LoginController;
use App\Http\Controllers\Admins\AuthorsController;

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

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/create', [BookController::class, 'store'])->name('books.store');
    Route::get('{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('{id}/edit', [BookController::class, 'update'])->name('books.update');
    Route::get('{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
});
Route::prefix('customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('{id}/edit', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('{id}/destroy', [CustomerController::class, 'destroy'])->name('customers.destroy');
});
Route::prefix('authors')->group(function () {
    Route::get('/', [AuthorsController::class, 'index'])->name('authors.index');
    Route::get('/create', [AuthorsController::class, 'create'])->name('authors.create');
    Route::post('/create', [AuthorsController::class, 'store'])->name('authors.store');
    Route::get('{id}/edit', [AuthorsController::class, 'edit'])->name('authors.edit');
    Route::post('{id}/edit', [AuthorsController::class, 'update'])->name('authors.update');
    Route::get('{id}/destroy', [AuthorsController::class, 'destroy'])->name('authors.destroy');
});
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('{id}/edit', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
});
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/create', [UserController::class, 'store'])->name('users.store');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('{id}/edit', [UserController::class, 'update'])->name('users.update');
    Route::get('{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});
Route::prefix('publishers')->group(function () {
    Route::get('/', [PublisherController::class, 'index'])->name('publishers.index');
    Route::get('/create', [PublisherController::class, 'create'])->name('publishers.create');
    Route::post('/create', [PublisherController::class, 'store'])->name('publishers.store');
    Route::get('{id}/edit', [PublisherController::class, 'edit'])->name('publishers.edit');
    Route::post('{id}/edit', [PublisherController::class, 'update'])->name('publishers.update');
    Route::get('{id}/destroy', [PublisherController::class, 'destroy'])->name('publishers.destroy');
});
