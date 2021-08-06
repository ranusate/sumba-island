<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'name' => 'Ranus'
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Ranus', 'email' => 'ranusate19@gmail.com',
    'active' => 'about',
    'image' => 'ranus.png']);
});

Route::get('/posts', [PostController::class, "index"]);


Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => "Post",
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('user','category'),
    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('posts', [
        'title' => "Post By Author : $user->name",
        'active' => 'abaout',
        'posts' => $user->posts->load('category', 'user'),
    ]);
});
