<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\CustomAuthController;
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
    return view('welcome');
});


Route::get("form",[UsersController::class,'showForm']);
Route::post("submit",[UsersController::class,'getData']);

Route::group(['as' => 'post.', 'prefix' => 'post'], function () {
    Route::get("/add",[CompanyCRUDController::class,'addPost'])->name('add');
    Route::post("/add",[CompanyCRUDController::class,'savePost']);
    Route::get("/list",[CompanyCRUDController::class,'postList'])->name('list');
    Route::get("/post/{company}",[CompanyCRUDController::class,'editPost'])->name('edit');
    Route::post("/edit/{company}",[CompanyCRUDController::class,'updatePost']);
    Route::get("/delete/{id}",[CompanyCRUDController::class,'deletePost'])->name('delete');
});

Route::get("/login",[CustomAuthController::class,'login'])->middleware('guest')->name('login');
Route::get("/registration",[CustomAuthController::class,'registration'])->middleware('guest');
Route::post("/registration-user",[CustomAuthController::class,'registrationUser'])->middleware('guest')->name('registration-user');
Route::post("/login-user",[CustomAuthController::class,'loginUser'])->middleware('guest')->name('login-user');
Route::get("/dashboard",[CustomAuthController::class,'dashboard'])->middleware('auth')->name('dashboard');
Route::get("/logout",[CustomAuthController::class,'logout']);