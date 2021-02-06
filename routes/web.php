<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NavBackController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('homeBack', [HomeController::class, 'back']);

Route::get('/navBack', [NavBackController::class,'back']);

Route::get('/articles',[ArticleController::class, "index"])->name('articles');
Route::get('/contact',[ContactController::class, "index"])->name('contact');