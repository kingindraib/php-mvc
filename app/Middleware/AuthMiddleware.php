<?php
namespace App\Middleware;

class AuthMiddleware implements Middleware{
    public function handle(Request $request, Response $response, callable $next) {
        // Check if the user is authenticated
        if($request->getSession()->get('user') === null) {
          // Redirect to the login page
          $response->redirect('/login');
          return;
        }
    
        // Call the next middleware in the stack
        $next($request, $response);
      }
}