<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\P5DimensionController;
use App\Http\Controllers\P5GroupController;
use App\Http\Controllers\P5ProjectController;
use App\Http\Controllers\P5ThemeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudyClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectLearningObjectiveController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum', 'role:admin'], 'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'p5-dimensions', 'as' => 'p5-dimension.'], function () {
        Route::get('/', [P5DimensionController::class, 'getDimensions']);
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
        Route::group(['prefix' => '{p5_group}/students', 'as' => 'p5-groups.'], function () {
            Route::get('/', [P5GroupController::class, 'getStudents']);
            Route::post('{student}', [P5GroupController::class, 'addStudent']);
            Route::delete('{student}', [P5GroupController::class, 'deleteStudent']);
        });
        // Route::post('/{p5_group}/coordinator/{guru}', [P5GroupController::class, 'setCoordinator']);
        Route::post('/{p5_group}/class/{class}', [P5GroupController::class, 'addStudentsFromClass']);

        Route::group(['prefix' => '{p5_group}/projects', 'as' => 'projects.'], function () {
            // Route::get('/', [P5GroupController::class, 'getProjects']); // already on global
            Route::post('/{p5_project}', [P5GroupController::class, 'addProject']);
            Route::delete('/{p5_project}', [P5GroupController::class, 'deleteProject']);
        });
    });

    Route::group(['prefix' => 'p5-phases', 'as' => 'p5-phase.'], function () {
        Route::get('/', [P5DimensionController::class, 'getPhases']); // already on global
    });

    Route::group(['prefix' => 'p5-subelements', 'as' => 'p5-subelement.'], function () {
        Route::get('/', [P5DimensionController::class, 'getSubelements']); // already on global
    });

    Route::group(['prefix' => 'p5-projects', 'as' => 'p5-project.'], function () {
        Route::post('/{p5_project}/subelement/{subelement}', [P5ProjectController::class, 'addTargetsFromSubelement']);
        Route::delete('/{p5_project}/phase/{phase}', [P5ProjectController::class, 'deleteTarget']);
        Route::delete('/{p5_project}/subelement/{subelement}', [P5ProjectController::class, 'deleteTargetsBySubelement']);
    });


    Route::apiResource('p5-projects', P5ProjectController::class);
    Route::apiResource('p5-themes', P5ThemeController::class);
    Route::apiResource('p5-groups', P5GroupController::class)->except('index', 'show'); // already on global
    Route::apiResource('students', StudentController::class)->only('index');
});
