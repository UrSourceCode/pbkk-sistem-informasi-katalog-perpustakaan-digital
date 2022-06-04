<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Book;
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

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [LoginController::class, 'index']);

Route::get('/login/lang={locale}', 'App\Http\Controllers\LocalizationController@index');

// Route::get('/register', function(){
//     return view('register');
// });

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

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

Route::get('/editbook', function(){
    return view('admin-edit-book', [
        'data' => DB::table('books')->where('id', 1)->first(),
    ]);
});

Route::get('/category', function(Category $category){
    return view('category', [
        'title' => "All Categories",
        'data' => Category::all(),
        'jenis' => "category",
    ]);
})->name('all.categories');

Route::get('/author', function(Author $author){
    return view('category', [
        'title' => "All Authors",
        'data' => Author::all(),
        'jenis' => "author",
    ]);
})->name('all.authors');

Route::get('/publisher', function(Publisher $publisher){
    return view('category', [
        'title' => "All Publishers",
        'data' => Publisher::all(),
        'jenis' => "publisher",
    ]);
})->name('all.publishers');

Route::get('/register/lang={locale}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/author/{author:id}', function(Author $author) {
    return view('home', [
        'title' =>"Books by ".$author->name,
        'data' => $author->books,
    ]);
});
Route::get('/publisher/{publisher:id}', function(Publisher $publisher) {
    return view('home', [
        'title' =>"Books by ".$publisher->name,
        'data' => $publisher->books,
    ]);
});
Route::get('/category/{category:id}', function(Category $category) {
    return view('home', [
        'title' =>"Books by ".$category->name,
        'data' => $category->books,
    ]);
});
