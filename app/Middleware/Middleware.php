<?php

namespace App\Middleware;

interface Middleware {
    public function handle(Request $request, Response $response, callable $next);
}