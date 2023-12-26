<?php

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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])
->template(\App\Nova\Templates\Index::class)
->name('index');


Route::get('/blog', [HomeController::class,'blog']);
Route::get('/locale/{locale}', [HomeController::class,'changeLocale']);


Route::get('/contact', function () {
    return view('contact');
})
->template(\App\Nova\Templates\Contact::class)
->name('contact');



Route::get('/qui-sommes-nous', function () {
    return view('about');
})
->template(\App\Nova\Templates\About::class)
->name('about');


Route::get('/articles/{slug}', [HomeController::class,'article']);
Route::get('/services', [HomeController::class,'services']);
Route::get('/services/{slug}', [HomeController::class,'service']);


