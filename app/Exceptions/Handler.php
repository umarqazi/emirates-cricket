<?php

namespace App\Exceptions;

use Exception;
use Facade\Ignition\SolutionProviders\RouteNotDefinedSolutionProvider;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Not Found'], 404);
            }
            return response()->view('exceptions.404', ['NotFound' => true], 404);
        }
        elseif ($exception instanceof  MethodNotAllowedHttpException){
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Not Found'], 404);
            }
            return response()->view('exceptions.404', ['MethodNotAllowed' => true], 404);
        }
        elseif ($exception instanceof  ModelNotFoundException){
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Not Found'], 404);
            }
            return response()->view('exceptions.404', ['ModelNotFound' => true], 404);
        }
        elseif ($exception instanceof  RouteNotFoundException){
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Not Found'], 404);
            }
            return response()->view('exceptions.404', ['RouteNotFound' => true], 404);
        }
        elseif ($exception instanceof  ServerException){
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Not Found'], 500);
            }
            return response()->view('exceptions.500', ['RouteNotFound' => true], 500);
        }
        return parent::render($request, $exception);
    }
}
