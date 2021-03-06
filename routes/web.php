<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('/signup', [CustomAuthController::class, 'register'])->name('signup');
Route::post('/signin', [CustomAuthController::class, 'login'])->name('signin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [TaskController::class, 'index'])->name('dashboard');
    Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
    Route::post('/task', [TaskController::class, 'create'])->name('task.create');
    Route::post('/task/remove', [TaskController::class, 'delete'])->name('task.remove');
    Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');
});
