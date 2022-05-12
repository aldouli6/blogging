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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth' ])->group(function(){
    Route::middleware(['role:super_admin' ])->group(function(){
        Route::resource('users', App\Http\Controllers\UserController::class);
        });
    Route::middleware(['role:admin|super_admin' ])->group(function(){
        Route::resource('posts', App\Http\Controllers\PostController::class)->only([ 'index', 'edit', 'update', 'destroy']);
        // Route::resource('posts', App\Http\Controllers\PostController::class)->except(['create', 'show']);
        // Route::put('posts/{posts}',[App\Http\Controllers\PostController::class, 'update']);
        // Route::get('posts/{posts}',[App\Http\Controllers\PostController::class, 'show']);
        // Route::get('posts/{posts}/edit',[App\Http\Controllers\PostController::class, 'edit']);
        // Route::delete('posts/{posts}',[App\Http\Controllers\PostController::class, 'destroy']);
    });
    // Route::get('posts/create',[App\Http\Controllers\PostController::class, 'create']);
    // Route::post('posts',[App\Http\Controllers\PostController::class, 'store']);
    // Route::get('posts',[App\Http\Controllers\PostController::class, 'index']);
    
    Route::resource('posts', App\Http\Controllers\PostController::class)->only(['create', 'store','show',]);
});



