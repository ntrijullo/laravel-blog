<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

// Route::get('/', function () {

//     return view('welcome', ['posts' => $posts]);
// });

Route::get('/', [HomeController::class, 'show']);

Route::controller(PostsController::class)->group(function(){
    Route::get('/posts/{id}', 'show');
    Route::get('/posts/create', 'create');
    Route::post('/posts', 'store');
    Route::get('/posts/{id}/edit', 'edit');
    Route::patch('/posts/{id}', 'update');
    Route::delete('/posts/{id}', 'destroy');
});