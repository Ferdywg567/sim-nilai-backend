<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\P5GroupController;
use App\Http\Controllers\P5ProjectController;
use App\Http\Controllers\StudyClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectLearningObjectiveController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum', 'role:admin']], function () {
    Route::group(['prefix' => 'p5-projects', 'as' => 'p5-project.'], function () {
        Route::get('achievements/{phase}', [P5ProjectController::class, 'getProfileAchievementsOptions']);
    });

    Route::group(['prefix' => 'gurus', 'as' => 'gurus.'], function () {
        Route::get('/', [GuruController::class, 'index']);
        Route::get('{guru}', [GuruController::class, 'show']);
    });

    Route::group(['prefix' => 'subjects', 'as' => 'subject.'], function () {
        Route::get('/', [SubjectController::class, 'index']);

        Route::group(['prefix' => '{subject}/objectives', 'as' => 'objectives.'], function () {
            Route::get('/', [SubjectLearningObjectiveController::class, 'index']);
            Route::post('/', [SubjectLearningObjectiveController::class, 'store']);
            Route::put('/{}', [SubjectLearningObjectiveController::class, 'update']);
            Route::delete('/', [SubjectLearningObjectiveController::class, 'delete']);
        });
    });

    Route::group(['prefix' => 'classes', 'as' => 'classes.'], function () {
        Route::get('/', [StudyClassController::class, 'index']);
    });

    Route::group(['prefix' => 'p5-groups', 'as' => 'p5-groups.'], function () {
        // Route::post('/{p5_group}/coordinator/{guru}', [P5GroupController::class, 'setCoordinator']);
        Route::post('/{p5_group}/students/{student}', [P5GroupController::class, 'addStudent']);
        Route::post('/{p5_group}/class/{class}', [P5GroupController::class, 'addStudentsFromClass']);

        Route::group(['prefix' => '{p5_group}/projects', 'as' => 'projects.'], function () {
            Route::get('/', [P5GroupController::class, 'getProjects']);
            Route::post('/{p5_project}', [P5GroupController::class, 'addProject']);
            Route::delete('/{p5_project}', [P5GroupController::class, 'deleteProject']);
        });
    });


    Route::apiResource('p5-projects', P5ProjectController::class);
    Route::apiResource('p5-groups', P5GroupController::class);
});
