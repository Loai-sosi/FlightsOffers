<?php

namespace App\Exceptions;

use App\Traits\ApiResponder;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{

    use ApiResponder;

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception)
    {
        if ($request->wantsJson() || $request->ajax()) {
            return $this->handleApiResponse($exception);
        }
        return parent::render($request, $exception);
    }


    private function handleApiResponse($exception)
    {
        $response = [];
        $message = $exception->getMessage();
        $statusCode = method_exists($exception, 'getStatusCode') ? $exception->getStatusCode() : 500;


        if ($exception instanceof UnauthorizedException) {
            $message = trans('alerts.unauthorized');
            $statusCode = Response::HTTP_FORBIDDEN;
        }


        if ($exception instanceof AuthenticationException) {
            $message = trans('alerts.unauthenticated');
            $statusCode = Response::HTTP_UNAUTHORIZED;
        }


        if ($exception instanceof AuthorizationException) {
            $message = trans('alerts.forbidden');
            $statusCode = Response::HTTP_FORBIDDEN;
        }


        if ($exception instanceof NotFoundHttpException) {
            $message = trans('alerts.not_found');
            $statusCode = Response::HTTP_NOT_FOUND;
        }


        if ($exception instanceof ModelNotFoundException) {
            $message = trans('alerts.not_found');
            $statusCode = Response::HTTP_NOT_FOUND;
        }


        if ($exception instanceof MethodNotAllowedHttpException) {
            $message = trans('alerts.method_not_allowed');
            $statusCode = Response::HTTP_METHOD_NOT_ALLOWED;
        }


        if ($exception instanceof ValidationException) {
            $message = str_replace(':count', count($exception->errors()), trans('alerts.validation_errors'));
            $statusCode = Response::HTTP_UNPROCESSABLE_ENTITY;
        }

        if (config('app.debug')) {
            $response['trace'] = $exception->getTrace();
        }


        return $this->setError($message)
            ->setHttpCode($statusCode)
            ->addResponseArrayWhen(!empty($response), $response)
            ->addValidationErrors($exception instanceof ValidationException, function () use ($exception) {
                return array_values($exception->validator->errors()->messages());
            })->getResponse();
    }
}
