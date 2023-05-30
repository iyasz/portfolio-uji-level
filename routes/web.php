<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/my-profil', [ProfilController::class, 'edit'])->middleware('auth');
Route::put('/my-profil/{id}', [ProfilController::class, 'update'])->middleware('auth');

Route::get('/my-profil/detail', [ProfilController::class, 'detail'])->middleware('auth');
Route::put('/my-profil/detail/{id}', [ProfilController::class, 'detailUpdate'])->middleware('auth');

Route::post('/project', [ProjectController::class, 'store'])->middleware('auth');
Route::delete('/project/{id}', [ProjectController::class, 'delete'])->middleware('auth');
Route::put('/project/{id}', [ProjectController::class, 'update'])->middleware('auth');
Route::get('/project/searchValue/{id}', [ProjectController::class, 'SearchValue'])->middleware('auth');

Route::put('/status/update/{id}', [IndexController::class, 'statusUpdate'])->middleware('auth');

Route::get('/auth/login', [AuthController::class, 'loginView'])->middleware('guest')->name('login');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

