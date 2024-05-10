<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\P5GroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

//* ====================== AUTH ROUTES =====================

require_once 'api_admin.php';
require_once 'api_guru.php';

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('user', [AuthController::class, 'getUserProfile']);
    Route::post('logout', [AuthController::class, 'logout']);

    //* GLOBAL ROUTE FOR ALL ROLE
    Route::group(['prefix' => 'p5-groups', 'as' => 'p5-groups.'], function () {
        Route::get('/', [P5GroupController::class, 'index']);
        Route::get('/{p5_group}', [P5GroupController::class, 'show']);
        Route::get('/{p5_group}/projects', [P5GroupController::class, 'getProjects']);
    });
});
