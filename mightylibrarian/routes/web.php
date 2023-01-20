<?php

use App\Http\Controllers\Author\Author;
use App\Http\Controllers\Book\Book;
use App\Http\Controllers\Book\BookIssue;
use App\Http\Controllers\Category\Category;
use App\Http\Controllers\Publisher\Publisher;
use App\Http\Controllers\Setting\Setting;
use App\Http\Controllers\Student\Student;
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

Route::get('/', function () {
    return view('frontend.index');
});
/*
 * Dashboard
 */
Route::get('dashboard', [Author::class, 'index'])->name('dashboard');
Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], static function () {

// Author CRUD
    Route::group(['as' => 'authors.', 'prefix' => 'authors'], static function () {
        Route::match(['get', 'post'],'', [Author::class, 'index'])->name('list');
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
        Route::post('create', [Author::class, 'create'])->name('create');
        Route::post('update/{author}', [Author::class, 'update'])->name('update');
        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
    });
//// Category CRUD
//    Route::group(['as' => 'categories.', 'prefix' => 'categories'], static function () {
//        Route::get('', [Category::class, 'index'])->name('list');
//        Route::post('', [Category::class, 'index'])->name('list');
//        Route::post('create', [Category::class, 'create'])->name('create');
//        Route::post('update/{category}', [Category::class, 'update'])->name('update');
//        Route::post('delete/{category}', [Category::class, 'destroy'])->name('delete');
//    });
//// Publisher CRUD
//    Route::group(['as' => 'publishers.', 'prefix' => 'publishers'], static function () {
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
//        Route::post('create', [Author::class, 'create'])->name('create');
//        Route::post('update/{author}', [Author::class, 'update'])->name('update');
//        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
//    });
//// Book CRUD
//    Route::group(['as' => 'books.', 'prefix' => 'books'], static function () {
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
//        Route::post('create', [Author::class, 'create'])->name('create');
//        Route::post('update/{author}', [Author::class, 'update'])->name('update');
//        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
//    });
//// BookIssue CRUD
//    Route::group(['as' => 'book-issues.', 'prefix' => 'book-issues'], static function () {
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
//        Route::post('create', [Author::class, 'create'])->name('create');
//        Route::post('update/{author}', [Author::class, 'update'])->name('update');
//        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
//    });
//// Student CRUD
//    Route::group(['as' => 'students.', 'prefix' => 'students'], static function () {
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
//        Route::post('create', [Author::class, 'create'])->name('create');
//        Route::post('update/{author}', [Author::class, 'update'])->name('update');
//        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
//    });
//// Report CRUD
//    Route::group(['as' => 'reports.', 'prefix' => 'reports'], static function () {
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
//        Route::post('create', [Author::class, 'create'])->name('create');
//        Route::post('update/{author}', [Author::class, 'update'])->name('update');
//        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
//    });
//// Setting CRUD
//    Route::group(['as' => 'settings.', 'prefix' => 'settings'], static function () {
//        Route::get('', [Author::class, 'index'])->name('list');
//        Route::post('', [Author::class, 'index'])->name('list');
//        Route::post('create', [Author::class, 'create'])->name('create');
//        Route::post('update/{author}', [Author::class, 'update'])->name('update');
//        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
//    });

});
// Category CRUD
Route::get('/dashboard/categories', [Category::class, 'index'])->name('categories');
// Publisher CRUD
Route::get('/dashboard/publishers', [Publisher::class, 'index'])->name('publishers');
// Book CRUD
Route::get('/dashboard/books', [Book::class, 'index'])->name('books');
// BookIssue CRUD
Route::get('/dashboard/book-issues', [BookIssue::class, 'index'])->name('book-issues');
// Student CRUD
Route::get('/dashboard/students', [Student::class, 'index'])->name('students');
// Report CRUD
Route::get('/dashboard/reports', [Author::class, 'index'])->name('reports');
// Setting CRUD
Route::get('/dashboard/settings', [Setting::class, 'index'])->name('settings');
