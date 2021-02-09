<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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
Route::get('/articles',[ArticleController::class, "index"])->name('articles');
Route::get('/contact',[ContactController::class, "index"])->name('contact');

// BO

Route::get('/bo',function(){
    return view('backoffice');
});

// create part

Route::get('/bo/home', [HomeController::class, 'home']);
Route::post('/addHomeBullet',[HomeController::class, 'storeHome']);
Route::post('/addAboutBullet',[HomeController::class, 'storeAbout']);
Route::get('/bo/nav', [HomeController::class, 'nav']);
Route::post('/addNavLink',[HomeController::class, 'storeNav']);
Route::get('/bo/articles',[ArticleController::class, "create"]);
Route::post('/add-article',[ArticleController::class, 'store']);

Route::get('/bo/addresses',[ContactController::class, "address"]);
Route::post('/add-address',[ContactController::class, 'storeAddress']);
Route::get('/bo/emails',[ContactController::class, "email"]);
Route::post('/add-email',[ContactController::class, 'storeEmail']);
Route::get('/bo/phones',[ContactController::class, "phone"]);
Route::post('/add-phone',[ContactController::class, 'storePhone']);