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
    return view('welcome');
});

//rutas con prefijo

// Route::get('/info/nosotros', function(){
//     return 'nosotros';
// });

// Route::get('/info/contacto', function(){
//     return 'contacto';
// });

Route::prefix('info')->group(function(){

    Route::get('/nosotros', function(){
        return 'nosotros';
    });

    Route::get('/contacto', function(){
        return 'contacto';
    });
});