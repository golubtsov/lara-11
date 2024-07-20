<?php

use Illuminate\Support\Facades\Route;
use Domain\Web\Dictionary\Words\WordController;

Route::get('/', static function () {
    return view('welcome');
});

Route::get('/words', [WordController::class, 'index'])->name('words.index');
