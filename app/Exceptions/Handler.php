<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        // $this->reportable(function (Throwable $e) {
        //     //
        // });
        $this->renderable(function (Throwable $e, Request $request) {
            if ($e instanceof NotFoundHttpException) {
                return response()->json(['status' => Response::HTTP_NOT_FOUND, 'message' => Lang::get('message.not_found')], status: Response::HTTP_NOT_FOUND);
            }
            return response()->json(['status' => Response::HTTP_SERVICE_UNAVAILABLE, 'message' => $e->getMessage()], status: Response::HTTP_SERVICE_UNAVAILABLE);
        });
    }
}
