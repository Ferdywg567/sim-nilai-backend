<?php
// header('Access-Control-Allow-Origin: *, http://localhost:5173');
// header('Access-Control-Allow-Methods: *, http://localhost:5173');
// header('Access-Control-Allow-Headers: *, http://localhost:5173');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: *');
// header('Access-Control-Allow-Headers: *');

use App\Http\Middleware\Cors;
use App\Http\Middleware\RoleCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            '*'
        ]);
        $middleware->statefulApi();
        $middleware->alias([
            'role' => RoleCheck::class,
            'cors' => Cors::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
