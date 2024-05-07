<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

//* ====================== AUTH ROUTES =====================
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('user', [AuthController::class, 'getUserProfile']);
    Route::post('logout', [AuthController::class, 'logout']);
});

require_once 'api_admin.php';
require_once 'api_guru.php';
