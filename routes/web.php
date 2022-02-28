<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
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

Route::get('/posts/create', function () {
    return view('post/create');
});

/*Route::get('/posts', function () {
   //N+1 problem
   // return view('posts', ["posts"=>Post::all()]);
   return view('posts', [

       "posts"=>Post::latest()->with('category','author')->get()
    ]);
});*/

Route::get('/posts/{post:slug}', function (Post $post) {
    //N+1 problem
    // return view('posts', ["posts"=>Post::all()]);
    return view('post', [
 
        "post"=>$post
     ]);
 });


 
 Route::resource('posts','App\Http\Controllers\PostController');

