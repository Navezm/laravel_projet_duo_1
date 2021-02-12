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
Route::get('/article-edit/{id}', [ArticleController::class,'edit']);
Route::post('/update-article/{id}',[ArticleController::class, 'update']);

Route::get('/bo/addresses',[ContactController::class, "address"]);
Route::post('/add-address',[ContactController::class, 'storeAddress']);
Route::post('/delete-address/{id}',[ContactController::class, 'destroyAddress']);
Route::get('/edit-address/{id}',[ContactController::class, 'editAddress']);
Route::post('/update-address/{id}',[ContactController::class, 'updateAddress']);

Route::get('/bo/emails',[ContactController::class, "email"]);
Route::post('/add-email',[ContactController::class, 'storeEmail']);
Route::post('/delete-email/{id}',[ContactController::class, 'destroyEmail']);
Route::get('/edit-email/{id}',[ContactController::class, 'editEmail']);
Route::post('/update-email/{id}',[ContactController::class, 'updateEmail']);

Route::get('/bo/phones',[ContactController::class, "phone"]);
Route::post('/add-phone',[ContactController::class, 'storePhone']);
Route::post('/delete-phone/{id}',[ContactController::class, 'destroyPhone']);
Route::get('/edit-phone/{id}',[ContactController::class, 'editPhone']);
Route::post('/update-phone/{id}',[ContactController::class, 'updatePhone']);

Route::post('/deleteNav/{id}', [HomeController::class,'destroy']);
Route::post('/deleteHome/{id}', [HomeController::class,'destroy2']);
Route::post('/deleteAbout/{id}', [HomeController::class,'destroy3']);


// PAGE CONTENTS - static db

Route::get('/bo/articles/pg', [ArticleController::class, 'editPageContent']);
Route::post('/bo/articles/content/update', [ArticleController::class, 'updatePageContent']);
Route::get('/bo/contact/pg', [ContactController::class, 'editPageContent']);
Route::post('/bo/contact/content/update', [ContactController::class, 'updatePageContent']);
Route::post('/bo/contact/content/update-form/{id}', [ContactController::class, 'updatePageContentForm']);