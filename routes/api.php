<?php

use Illuminate\Support\Facades\Route;
use Domain\Users\UserController;

Route::apiResource('users', UserController::class);
