<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

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
//auth
Auth::routes();

//home
Route::get('/', [PostController::class, 'index']);

//posts
Route::resources([
    'posts' => PostController::class,
]);

//other pages
Route::get('/results', [PagesController::class, 'results']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/contact', [PagesController::class, 'contact']);
