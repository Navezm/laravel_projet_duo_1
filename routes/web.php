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
Route::post('/delete-article/{id}',[ArticleController::class, 'destroy']);
Route::get('/article-show/{id}', [ArticleController::class,'show']);

Route::get('/bo/addresses',[ContactController::class, "address"]);
Route::post('/add-address',[ContactController::class, 'storeAddress']);
Route::post('/delete-address/{id}',[ContactController::class, 'destroyAddress']);
Route::get('/bo/emails',[ContactController::class, "email"]);
Route::get('/bo/phones',[ContactController::class, "phone"]);
Route::post('/add-email',[ContactController::class, 'storeEmail']);
Route::post('/delete-email/{id}',[ContactController::class, 'destroyEmail']);
Route::get('/bo/phones',[ContactController::class, "phone"]);
Route::post('/add-phone',[ContactController::class, 'storePhone']);
Route::post('/delete-phone/{id}',[ContactController::class, 'destroyPhone']);

Route::post('/deleteNav/{id}', [HomeController::class,'destroy']);
Route::post('/deleteHome/{id}', [HomeController::class,'destroy2']);
Route::post('/deleteAbout/{id}', [HomeController::class,'destroy3']);

Route::get('/editNav/{id}', [HomeController::class,'edit']);
Route::get('/editHome/{id}', [HomeController::class,'edit2']);
Route::get('/editAbout/{id}', [HomeController::class,'edit3']);
Route::post('/updateNav/{id}', [HomeController::class,'update']);
Route::post('/updateHome/{id}', [HomeController::class,'update2']);
Route::post('/updateAbout/{id}', [HomeController::class,'update3']);