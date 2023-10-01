<?php

namespace App\Middleware;

interface Middleware {
    // public function handle(Request $request, Response $response, callable $next);
    // public function Auth(Request $request, Response $response, callable $next);
    public static function Auth();
}