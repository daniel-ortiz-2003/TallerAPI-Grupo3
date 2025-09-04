<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
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

    private $url = [
        'article',
        'category',
        'entry',
        'issue',
        'person',
        'presentation',
        'supplier',
        'unit',
        'role',
        'user'
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            //añadir prefijo API/ a la lista url
            $urlFinal = preg_filter('/^/','api/', $this->url);
            //añadir el sufijo / a la lista url
            $urlFinal = preg_filter('/$/','/*',$urlFinal);

            if($request->is($urlFinal)) {
                return response()->json([
                    'message' => 'Registro no encontrado'
                ],Response::HTTP_NOT_FOUND);
            }
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthorizationException) {
            return response()->json([
                'message' => 'Acceso prohibido al recursol'
            ]);
        }

        if ($exception instanceof RouteNotFoundException) {
            return Response()->json([
                'message' => 'debe iniciar sesión'
            ], Response::HTTP_UNAUTHORIZED);
        }
        return parent::render($request, $exception);
    }

}
