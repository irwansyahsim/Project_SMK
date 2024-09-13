<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;

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

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::patch('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');


Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});





Route::get('/create', [OrderController::class, 'create']);
Route::post('/kirim', [OrderController::class, 'store']);


Route::get('/addstock', [MenuController::class, 'create'])->name('menu.create');
Route::post('addstock', [MenuController::class, 'store'])->name('menu.store');