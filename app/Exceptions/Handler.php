<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
<<<<<<< HEAD
     * @var array<int, class-string<Throwable>>
=======
     * @var array
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
<<<<<<< HEAD
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
=======
     * @var array
     */
    protected $dontFlash = [
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
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
<<<<<<< HEAD
        $this->reportable(function (Throwable $e) {
            //
        });
=======
        //
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
    }
}
