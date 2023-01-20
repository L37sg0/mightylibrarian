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
    Route::group(['as' => 'author.', 'prefix' => 'authors'], static function () {
        Route::match(['get', 'post'],'', [Author::class, 'index'])->name('list');
        Route::post('create', [Author::class, 'create'])->name('create');
        Route::post('update/{author}', [Author::class, 'update'])->name('update');
        Route::post('delete/{author}', [Author::class, 'destroy'])->name('delete');
    });
// Book CRUD
    Route::group(['as' => 'book.', 'prefix' => 'books'], static function () {
        Route::match(['get', 'post'], '', [Book::class, 'index'])->name('list');
        Route::post('create', [Book::class, 'create'])->name('create');
        Route::post('update/{book}', [Book::class, 'update'])->name('update');
        Route::post('delete/{book}', [Book::class, 'destroy'])->name('delete');
    });
// BookIssue CRUD
    Route::group(['as' => 'book-issue.', 'prefix' => 'book-issues'], static function () {
        Route::match(['get', 'post'], '', [BookIssue::class, 'index'])->name('list');
        Route::post('create', [BookIssue::class, 'create'])->name('create');
        Route::post('update/{book-issue}', [BookIssue::class, 'update'])->name('update');
        Route::post('delete/{book-issue}', [BookIssue::class, 'destroy'])->name('delete');
    });
// Category CRUD
    Route::group(['as' => 'category.', 'prefix' => 'categories'], static function () {
        Route::match(['get', 'post'], '', [Category::class, 'index'])->name('list');
        Route::post('create', [Category::class, 'create'])->name('create');
        Route::post('update/{category}', [Category::class, 'update'])->name('update');
        Route::post('delete/{category}', [Category::class, 'destroy'])->name('delete');
    });
// Publisher CRUD
    Route::group(['as' => 'publisher.', 'prefix' => 'publishers'], static function () {
        Route::match(['get', 'post'], '', [Publisher::class, 'index'])->name('list');
        Route::post('create', [Publisher::class, 'create'])->name('create');
        Route::post('update/{publisher}', [Publisher::class, 'update'])->name('update');
        Route::post('delete/{publisher}', [Publisher::class, 'destroy'])->name('delete');
    });
// Report CRUD
    Route::group(['as' => 'report.', 'prefix' => 'reports'], static function () {
        Route::match(['get', 'post'], '', [Author::class, 'index'])->name('list');
        Route::post('create', [Author::class, 'create'])->name('create');
        Route::post('update/{report}', [Author::class, 'update'])->name('update');
        Route::post('delete/{report}', [Author::class, 'destroy'])->name('delete');
    });
// Student CRUD
    Route::group(['as' => 'student.', 'prefix' => 'students'], static function () {
        Route::match(['get', 'post'], '', [Student::class, 'index'])->name('list');
        Route::post('create', [Student::class, 'create'])->name('create');
        Route::post('update/{student}', [Student::class, 'update'])->name('update');
        Route::post('delete/{student}', [Student::class, 'destroy'])->name('delete');
    });
// Setting CRUD
    Route::group(['as' => 'setting.', 'prefix' => 'settings'], static function () {
        Route::match(['get', 'post'], '', [Setting::class, 'index'])->name('list');
        Route::post('create', [Setting::class, 'create'])->name('create');
        Route::post('update/{setting}', [Setting::class, 'update'])->name('update');
        Route::post('delete/{setting}', [Setting::class, 'destroy'])->name('delete');
    });

});
