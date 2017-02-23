<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    protected $dontReport = [ HttpException::class, ];

    public function report(Exception $e)
    {
        return parent::report($e);
    }

    public function render($request, Exception $e)
    {
        if($e instanceof NotFoundHttpException)
        {
        return response()->view('errors.503', [], 503);
        }
        return parent::render($request, $e);
    }
}
