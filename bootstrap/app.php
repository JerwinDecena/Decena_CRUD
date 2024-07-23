<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except:[
            'http://decenamodels.test/Student',
            'http://decenamodels.test/Student/31',
            'http://decenamodels.test/Student/32'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
