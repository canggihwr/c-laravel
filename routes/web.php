<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', [
        "name" => "Canggih WR",
        "nick" => "Slump",
        "title" => "Home"
    ]);
});

Route::get('/about', [PostController::class, 'about']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('blog', [
        'title' => "Post by Category : $category->name",
        'data' => $category->blog->load('category','user')
    ]);
});

Route::get('/author/{user:username}', function(User $user) {
    return view('blog', [
        'title' => "Post by Author : $user->name",
        'data' => $user->blog->load('user','category')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function() {
    return view('/dashboard/index');
})->middleware('auth');

Route::get('/dashboard/blog/{post:slug}', [DashboardPostController::class, 'show']);

Route::get('/dashboard/blog/delete/{post:id}', [DashboardPostController::class, 'destroy']);

Route::get('/dashboard/blog/edit/{post:slug}', [DashboardPostController::class, 'edit']);

Route::post('/dashboard/blog/update/{post:slug}', [DashboardPostController::class, 'update']);

Route::get('/dashboard/create', function() {
    return view('dashboard.blog.create', [
        'categories' => Category::all()
    ]);
});


Route::resource('/dashboard/blog', DashboardPostController::class)->middleware('auth');



