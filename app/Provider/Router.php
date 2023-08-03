<?php 

namespace App\Provider;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;

class Router
{
    public function __invoke(RouteCollection $routes)
    {
        $context = new RequestContext();
        $context->fromRequest(Request::createFromGlobals());

        // Routing can match routes with incoming requests
        $matcher = new UrlMatcher($routes, $context);
           
        try {
            $arrayUri = explode('?', $_SERVER['REQUEST_URI']);
            $matcher = $matcher->match($arrayUri[0]);
            // print_r($matcher['_route']);
            // die();
            // Cast params to int if numeric
            array_walk($matcher, function(&$param)
            {
                if(is_numeric($param)) 
                {
                    $param = (int) $param;
                 
                }
            });
            // echo "<pre>";
            // $param = 1;
            // print_r($param);
            // die();
            list($matcher['controller'], $action) = explode('@', $matcher['controller']);
            // print_r($action);
            // print_r($matcher['controller']);
            // die();
            $matcher['method'] = $action;
            //  print_r($matcher['method']);
            // die();
            // Cast params to string if string
            // Issue #2: Fix Non-static method ... should not be called statically
            $className = '\\App\\Controllers\\' . $matcher['controller'];
            $classInstance = new $className();
    
          
            // Add routes as paramaters to the next class
            $params = array_merge(array_slice($matcher, 2, -1), array('routes' => $routes));
            // unset($matcher['_route']);
            // call_user_func_array(array($classInstance, $matcher['method']), $params);
            // $id = is_numeric($matcher['parameters']['id']) ? (int) $matcher['parameters']['id'] : null;
            // $id = (int)$matcher['id'] ?? '';
            // call_user_func_array([$classInstance, $matcher['method']], [$id, $routes]); 
            if(!empty($matcher['id'])){
                call_user_func_array([$classInstance, $matcher['method']], [(int)$matcher['id'], $routes]); 
            }else{
                call_user_func_array(array($classInstance, $matcher['method']), $params);
            }
            


            // Check if the "id" parameter exists
        // if (isset($matcher['parameters']['id'])) {
        //     // Cast the "id" parameter to an integer if necessary
        //     $id = is_numeric($matcher['parameters']['id']) ? (int) $matcher['parameters']['id'] : null;
        // } else {
        //     $id = null; // Set "id" to null if it doesn't exist
        // }

        // // Pass the "id" parameter to the method call
        // call_user_func_array(array($classInstance, $matcher['method']), array($id, $routes));


            
        } catch (MethodNotAllowedException $e) {
            echo 'Route method is not allowed.';
        } catch (ResourceNotFoundException $e) {
            echo 'Route does not exists.';
        } catch (NoConfigurationException $e) {
            echo 'Configuration does not exists.';
        }
    }
}
// Invoke
$router = new Router();
$router($routes);
