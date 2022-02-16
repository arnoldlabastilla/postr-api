<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
<<<<<<< HEAD
     * @return array<int, string|null>
=======
     * @return array
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
