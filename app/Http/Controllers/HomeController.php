<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
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

        return view('welcome')->with('posts',$posts);
    }
}
