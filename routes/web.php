<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PostController::class, "index"]);
Route::get('/about', function () {
    return view('about', [
        'title' => 'About', 'name' => 'Ranus', 'email' => 'ranusate19@gmail.com',
        'active' => 'about',
        'image' => 'ranus.png'
    ]);
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

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'active' => 'categories',
//         'posts' => $category->posts->load('user','category'),
//     ]);
// });

// Route::get('/author/{user:username}', function (User $user) {
//     return view('posts', [
//         'active' => 'abaout',
//         'posts' => $user->posts->load('category', 'user'),
//     ]);
// });


// Route::get('/login', [LoginController::class, "index"]);
Route::get('/register', [RegisterController::class, "index"]);
Route::get('/logins', [RegisterController::class, "indexs"]);
Route::post('/register', [RegisterController::class, "store"]);
