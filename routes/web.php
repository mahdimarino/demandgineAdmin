<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;

/* Route::get('/', function () {
    return view('layaout/app');
}); */

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* Route::get('blog/list', function () {
    return view('blog.list');
});  */

// Route::get('/blogs/create', function () {
//     return view('bolgs.create');
// });


//Route::get('/', [LoginController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/dashboard/blogs', [BlogController::class, 'store'])->name('insertData')->middleware('auth');
Route::get('/dashboard/blogs/create', [BlogController::class, 'createBlogForm'])->name('dashboard.blogs.blog-form')->middleware('auth');
Route::get('/dashboard/blogs/latest', [BlogController::class, 'showLatestBlog'])->name('dashboard.blogs.latest')->middleware('auth');
Route::get('/dashboard/blogs/list', [BlogController::class, 'listBlogs'])->name('dashboard.blogs.list')->middleware('auth');
Route::get('/posts_list', [BlogController::class, 'postsList'])->name('posts_list');

Route::get('/dashboard/blogs/{blogId}/edit', [BlogController::class, 'editBlog'])->name('dashboard.blogs.edit');
Route::get('/{blogId}/post_page/{post_title}', [BlogController::class, 'postPage'])->name('post_page');

//Route::put('dashboard/blogs/{blog}', [BlogController::class, 'updateBlog'])->name('dashboard.blogs.update')->middleware('auth');
Route::put('dashboard/blogs/{id}', [BlogController::class, 'update'])->name('dashboard.blogs.update')->middleware('auth');
Route::delete('dashboard/blogs/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog')->middleware('auth');





