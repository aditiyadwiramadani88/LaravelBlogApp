<?php

use App\Http\Controllers\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Post;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('home');
});



Route::middleware([IsAdmin::class])->prefix('/admin')->group(function() { 

    Route::any('/create_post', [Post::class, 'CreatePost']);
    Route::get('all_post', [Post::class, 'AllPost']); 
    Route::any('/update_post/{slug}', [Post::class, 'UpdatePost']); 
    Route::delete('/delete_post/{slug}', [Post::class, 'DeletePost']); 
    Route::any('/edit_user', [Post::class, 'ChangeUser']);
    Route::any('/change_password', [Post::class, 'ChangePassword']);
    
});

Route::get('all_post', [Post::class, 'AllPost']); 

Route::middleware([AuthMiddleware::class])->prefix('/user')->group(function() {
    Route::post('/comment', [Comment::class, 'CreateComment']);
});


Route::get('/post/{slug}', [Post::class, 'GetPost']); 

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::get('/home', function () {
    
    if(Auth::check()) { 

        if(Auth::user()->role == 1) { 
            return redirect('/admin/all_post');
        }
    }
    return redirect('/');
    
});



Route::get('/search', [Post::class, 'SearchData']);

