<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
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
