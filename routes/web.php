<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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
    return redirect('getauthor');
});
Route::controller(AuthorController::class)->group(function(){
    Route::post('addauthor','AddAuthor');
    Route::get('getauthor','GetAuthor');
    Route::get('showbook/{id}','showbook');
    Route::get('showauthor/{id}','showauthor');
});
Route::controller(BookController::class)->group(function(){
    Route::post('addbook','AddBook');
    Route::get('getbook/{id}','GetBook');
});
