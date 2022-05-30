<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/show/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::get('/lang={locale}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/login', function () {
    return view('login');
});
Route::get('/login/lang={locale}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/register', function(){
    return view('register');
});
Route::get('/category', function(Category $category){
    return view('category', [
        'title' => "All Categories",
        'data' => Category::all(),
    ]);
})->name('all.category');

Route::get('/authors', function(Author $author){
    return view('category', [
        'title' => "All Authors",
        'data' => Author::all(),
    ]);
});
Route::get('/publisher', function(Author $author){
    return view('category', [
        'title' => "All Publishers",
        'data' => Publisher::all(),
    ]);
});
Route::get('/register/lang={locale}', 'App\Http\Controllers\LocalizationController@index');
