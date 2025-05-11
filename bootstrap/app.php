<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RedirectIfAuthenticatedToHome;
use App\Http\Middleware\CheckIfEmployer;
use App\Http\Middleware\CheckIfEmployee;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->alias([
        //     'guest.redirect.home' => RedirectIfAuthenticatedToHome::class
        // ]);
        $middleware->append(RedirectIfAuthenticatedToHome::class);

        $middleware->alias([
            'employer' => CheckIfEmployer::class,
            'employee' => CheckIfEmployee::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
