<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\P5EvaluationController;
use App\Http\Controllers\P5GroupController;
use App\Http\Controllers\StudyClassController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum', 'role:guru', 'cors'], 'prefix' => 'guru'], function () {
    Route::get('me', [GuruController::class, 'getProfile']);

    Route::group(['prefix' => 'p5', 'as' => 'p5.'], function () {
        Route::group(['prefix' => 'grades', 'as' => 'grades.'], function () {
            Route::post('/', [P5EvaluationController::class, 'storeGrades']);
        });
        Route::group(['prefix' => 'groups', 'as' => 'groups.'], function () {
            Route::get('/', [GuruController::class, 'getP5Groups']);
        });
    });

    Route::group(['prefix' => 'study-classes', 'as' => 'study-classes.'], function () {
        Route::get('/', [GuruController::class, 'getTaughtClasses']);
    });
});
