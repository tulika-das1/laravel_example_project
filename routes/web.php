<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestController2;

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

Route::get("/blog",[BlogPostController::class,'blogPost'])->middleware('auth')->name('blog');
Route::post("/blog",[BlogPostController::class,'blogPostUser']);
Route::get("/blog-post-page",[BlogPostController::class,'blogPostList'])->middleware('auth')->name('blog-post-page');
Route::get("/blog-edit/{blog}",[BlogPostController::class,'blogPostEdit'])->middleware('auth')->name('blog-edit');
Route::post("/blog-edit/{blog}",[BlogPostController::class,'updatePost']);
Route::get("/blog-delete/{blog}",[BlogPostController::class,'blogPostDelete'])->name('blog-delete');

Route::get('/test', TestController2::class);
