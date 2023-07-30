<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
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

    // * Añadimos esto para que nos redirija al login en caso de que haya una excepcion con el token
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof TokenMismatchException) {
            return redirect()->route('login'); // Reemplaza 'login' por el nombre de la ruta de inicio de sesión de tu aplicación
        }

        return parent::render($request, $exception);
    }

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
