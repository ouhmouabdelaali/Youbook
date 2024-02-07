<?php

//use App\Http\Controllers\BooksController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

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




//--------------------------user-------------------------
Route::get('/Login',[UsersController::class,'viewlog']);
Route::post('/dashbord',[UsersController::class,'login'])->name('login');

//-------------------------Books-----------------------------
//Route::resource('books',BooksController::class);
Route::get('/books',[BooksController::class,'index'])->name('view-index');
Route::get('books/newbook',[BooksController::class,'create'])->name('NEW_book');
Route::post('books/newbook',[BooksController::class,'store']);
Route::get('books/{id}/update',[BooksController::class,'edit']);
Route::patch('books/update/{id}',[BooksController::class,'update'])->name('update-book');


Route::delete('/books/{id}',[BooksController::class,'destroy']);
//---------------------------------------------------------------------





Route::get('/books/liste',[BooksController::class, 'show'])->name('view-book');

Route::get('/books/liste/{id}',[BooksController::class,'mybook'])->name('mybook');



Route::get('/books/{id}/reserve', [BooksController::class ,'reserve'])->name('reserve-book');
Route::get('/books/{id}/return',  [BooksController::class ,'returne'])->name('return-book');


//Route::get('/books/Unavailabl',[BooksController::class,'UnavailableBooks'])->name('UnavailableBooks');
