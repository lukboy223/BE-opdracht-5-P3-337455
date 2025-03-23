<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/producten', [ProductController::class, 'index'])->name('producten.index'); 
Route::post('/producten/{dateFrom}/{dateTo}', [ProductController::class, 'index'])->name('producten.index');