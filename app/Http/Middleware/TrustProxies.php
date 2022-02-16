<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Http\Middleware\TrustProxies as Middleware;
=======
use Fideloper\Proxy\TrustProxies as Middleware;
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array<int, string>|string|null
=======
     * @var array|string|null
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
=======
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
}
