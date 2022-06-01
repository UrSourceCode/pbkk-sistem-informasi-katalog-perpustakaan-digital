<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/show/{id}', [BookController::class, 'show'])->name('book.show');

Route::get('/lang={locale}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/login', function () {
    return view('login');
});
Route::get('/login/lang={locale}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/register', function(){
    return view('register');
});
Route::get('/register/lang={locale}', 'App\Http\Controllers\LocalizationController@index');
Route::get('/userhome', function(){
    return view('home', [
        'data' => Book::all(),
    ]);
});
Route::get('/adminhome', function(){
    return view('adminhome');
});

Route::get('/adminbook', function(){
    return view('admin-list-book', [
        'data' => Book::all(),
    ]);
});