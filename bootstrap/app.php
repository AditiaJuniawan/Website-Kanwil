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
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e, $request) {
            // Jangan halangi otentikasi (redirect login) dan validasi form
            if ($e instanceof \Illuminate\Auth\AuthenticationException ||
                $e instanceof \Illuminate\Validation\ValidationException) {
                return null;
            }

            if (!config('app.debug')) {
                if ($request->is('api/*')) {
                    return response()->json([
                        'message' => 'Situs sedang dalam pemeliharaan/perbaikan.'
                    ], 500);
                }

                if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
                    return response()->view('errors.404', [], 404);
                }

                // Biarkan status HTTP 4xx (403 Forbidden, 419 Page Expired, dll.) ditangani oleh Laravel
                if ($e instanceof \Symfony\Component\HttpKernel\Exception\HttpExceptionInterface && $e->getStatusCode() < 500) {
                    return null;
                }

                return response()->view('errors.maintenance', [], 500);
            }
        });
    })->create();
