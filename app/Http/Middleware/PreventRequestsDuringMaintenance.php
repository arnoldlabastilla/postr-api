<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
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
