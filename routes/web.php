<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/', function () {
   return view('home', [
      'title'  => 'Home',
      'active' => 'home',
   ]);
   });

Route::get('/about', function () {
   return view('about', [
      'title'  => 'About',
      "name"   => "Mbarep Leonardo",
      "email"  => "mbareb86@gmail.com",
      "image"  => "ava.jpg",
      'active' => 'about',
   ]);
   });

Route::get('/categories', function () {
   return view('categories', [
      'title'      => 'Categories',
      'active'     => 'categories',
      'categories' => Category::all()
   ]);
   });


Route::controller(PostController::class)->group(function () {
   Route::get('/posts', 'index');

   //detail post
   Route::get('/posts/{post:slug}', 'show');
   });


// group route
Route::controller(LoginController::class)->group(function () {
   Route::get('/login', 'index')->name('login')->middleware('guest');
   Route::post('/login', 'authenticate');
   Route::post('/logout', 'logout');
   });

// middleware route
// Route::middleware(['auth', 'guest', 'admin'])->group(function () {
//    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
//    Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
//    Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
//    });


Route::controller(RegisterController::class)->group(function () {
   Route::get('/register', 'index')->middleware('guest');
   Route::post('/register', 'store');
   });

Route::get('/dashboard', function () {
   return view('dashboard.index');
   })->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
