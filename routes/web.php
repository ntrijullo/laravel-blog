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
    $posts = [
        [
            'title'=> 'Curso de laravel 9',
            'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Nisi vel magni laboriosam. 
            Accusantium quisquam praesentium asperiores iste dignissimos voluptatum quos. 
            Provident quisquam incidunt deserunt possimus laudantium quo sunt impedit numquam!'
        ],
        [
            'title'=> 'Novedades de laravel 9',
            'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Nisi vel magni laboriosam. 
            Accusantium quisquam praesentium asperiores iste dignissimos voluptatum quos. 
            Provident quisquam incidunt deserunt possimus laudantium quo sunt impedit numquam!'
        ],
        [
            'title'=> 'Manejo basico de eloquent',
            'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Nisi vel magni laboriosam. 
            Accusantium quisquam praesentium asperiores iste dignissimos voluptatum quos. 
            Provident quisquam incidunt deserunt possimus laudantium quo sunt impedit numquam!'
        ],
    ];
    return view('welcome', ['posts' => $posts]);
});


