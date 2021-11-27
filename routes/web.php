<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Post;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('index');
});



Route::middleware([IsAdmin::class])->prefix('/admin')->group(function() { 

    Route::any('/create_post', [Post::class, 'CreatePost']);
    Route::get('all_post', [Post::class, 'AllPost']); 
    Route::any('/update_post/{slug}', [Post::class, 'UpdatePost']); 
    Route::delete('/delete_post/{slug}', [Post::class, 'DeletePost']); 
    
});

Route::get('/post/{slug}', [Post::class, 'GetPost']); 
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');

});


Route::get('/home', function () { 
    return redirect('/');
    
});