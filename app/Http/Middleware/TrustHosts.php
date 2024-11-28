<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array
     */
    public function hosts()
    {
        return [    
            $this->allSubdomainsOfApplicationUrl(),
            'localhost','192.168.1.136','127.0.0.1'
        ];
    }
}
