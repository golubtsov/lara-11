<?php

use Illuminate\Support\Facades\Route;
use Domain\Users\UserController;
use Domain\Models3D\Model3DController;

Route::apiResource('users', UserController::class);
Route::apiResource('models', Model3DController::class);
