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
//
Route::get('/',[\App\Http\Controllers\UserController::class, "home"]);
Route::get('/foo', function () {return view('welcome');});
//Route::get ('test',[\App\Http\Controllers\UserController::class, "index"]);
Route::get ('/home',[\App\Http\Controllers\UserController::class, "home"]);
Route::get ('/posts',[\App\Http\Controllers\UserController::class, "posts"]);
Route::get ('/post/{PostId}',[\App\Http\Controllers\UserController::class, "post"]);
Route::get ('/categories',[\App\Http\Controllers\UserController::class, "categories"]);
Route::get ('/category/{CategoryId}',[\App\Http\Controllers\UserController::class, "category"]);
Route::post ('/login?username={username}&password={password}',[\App\Http\Controllers\UserController::class, "login"]);
Route::post ('/login',[\App\Http\Controllers\UserController::class, "LoginPage"]);
