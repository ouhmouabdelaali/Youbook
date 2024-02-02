<?php

use App\Http\Controllers\BooksController;
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
//Route::get("/books",[BooksController::class,'index']);
Route::resource('Books',BooksController::class);
Route::post('Books/create',[BooksController::class,'create']);
Route::get('Books/{id}',[BooksController::class,'show']);
//Route::get('Books/{id}/edit',[BooksController::class,'update']);
Route::post('/Books/{id}/edit',[BooksController::class,'showcreate']);