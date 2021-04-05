<?php
declare(strict_types = 1);

namespace App\Http\Middleware;

use App\Http\Message\Request;

class SampleRouteMiddleware implements Middleware
{
    /**
     * @param Request $request
     */
    final public function process(Request $request): void
    {
        echo 'I am route middleware.';
    }
}