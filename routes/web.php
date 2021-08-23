<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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

Route::get('/', [PostController::class, "index"]);
Route::get('/about', function () {
    return view('about', [
        'title' => 'About', 'name' => 'Ranus', 'email' => 'ranusate19@gmail.com',
        'image' => 'ranus.png'
    ]);
});
Route::get('/posts', [PostController::class, "index"]);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => "Categories",
        'categories' => Category::all()
    ]);
});

Route::get('/auth', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/auth', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);


Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');