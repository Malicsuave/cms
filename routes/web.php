<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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


//Route::get('/post/{id}', [PostsController::class, 'index']);
//
Route::resource('posts', PostsController::class);

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/post', [PostsController::class, 'index']); // ✅


Route::get('/contact', [PostsController::class, 'contact']);



Route::get('/post/{id}/{name}/{password}', [PostsController::class, 'show_post']);









Route::get('/post/{id}/{name}/{password}', [PostsController::class, 'show_post']);  //route of the showpost

