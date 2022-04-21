<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutConroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route Home
Route::get('/', [HomeController::class, '__invoke']);

// Route Profile
Route::get('/profile', [ProfileController::class, 'index']);

// Contact Route
Route::get('/contact', [ContactController::class, '__invoke']);

// About Router
Route::get('/about', [AboutController::class, 'index']);

// Student Router
// middleware('auth') harus login dulu sebelum mengunjungi
Route::middleware('auth')->group(function () {
    Route::resource('/student', StudentController::class);
    Route::post('/logout',[LogoutConroller::class, '__invoke'])->name('logout');
});

// Users route
Route::resource('/user', UserController::class);
Route::get('/user/{user:username}/edit', [UserController::class, 'edit'])->name('user.edit');


// route yang tidak bisa di kunjungi jika user sudah login
Route::middleware('guest')->group(function () {
    // Registration route
    Route::get('/register', [RegistrationController::class, 'create'])->name('register');
    Route::post('/register', [RegistrationController::class, 'store'])->name('register');
    
    // Route login
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});