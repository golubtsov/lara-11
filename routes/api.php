<?php

use Domain\Api\Models3D\Model3DController;
use Domain\Api\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);
Route::apiResource('models', Model3DController::class);
