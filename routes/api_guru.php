<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\P5GroupController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum', 'role:guru']], function () {
    Route::get('me', [GuruController::class, 'getProfile']);
});
