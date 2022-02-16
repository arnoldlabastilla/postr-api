<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var array
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    protected $except = [
        //
    ];
}
