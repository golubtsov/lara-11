<?php

use Illuminate\Support\Facades\Route;
use Domain\Web\Dictionary\Words\WordController;

Route::get('/', static function () {
    return view('welcome');
});

Route::get('/words', [WordController::class, 'index'])->name('words.index');
Route::get('/words/create', [WordController::class, 'create'])->name('words.create');
Route::post('/words/store', [WordController::class, 'store'])->name('words.store');
Route::post('/words/update', [WordController::class, 'update'])->name('words.update');
Route::post('/words/edit', [WordController::class, 'edit'])->name('words.edit');
Route::post('/words/destroy', [WordController::class, 'destroy'])->name('words.destroy');
