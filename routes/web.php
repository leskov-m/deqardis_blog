<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{wow_user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/&&&/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/&&&', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/&&&', [UserController::class, 'destroy'])->name('users.destroy');
