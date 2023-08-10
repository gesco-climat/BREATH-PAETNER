<?php

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

Route::get('/', function () {
   return view('create');
});

use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserController;

Route::get('/user/create', [UserInfoController::class, 'create']);
Route::post('/user/store', [UserInfoController::class, 'store']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');







