<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('store');
});
Route::get('/books', [BookController::class, 'index'])->name('index');
Route::get('/books/{book}/show', [BookController::class, 'show'])->name('book.show');

// Route::get('/area-riservata', function () {
//     return 'privato';
// })->middleware('auth');
