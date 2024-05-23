<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/books', [BookController::class, 'index'])->name('index');
Route::get('/books/create', [BookController::class, 'create'])->name('create');
Route::post('/books/store', [BookController::class, 'store'])->name('store');
Route::get('/books/{book}/show', [BookController::class, 'show'])->name('show');