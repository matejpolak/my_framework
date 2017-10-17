<?php
include '../bootstrap/bootstrap.php';

$route = request('route', 404);

/**
 * Have a look at the request and return the name 
 * of the controller and mane of the action,
 * that should handle this request
 */
function getControllerActionFromRequest() {
    $routes = [];
    include  '../routes/web.php';
    
    $current_uri = $_SERVER['REQUEST_URI'];
    $current_uri = trim($current_uri, '/');

    $uri_parts = explode('/', $current_uri);

    $current_route = $uri_parts[0] ? $uri_parts[0] : 'homepage';
    
    if(isset($routes[$current_route])) {
        return $routes[$current_route];
    }
    else {
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
    }
}

function runControllerMethod($controller_name, $action_name) {
    // includes the right contoller
    include APP_DIR . '/controllers/'. $controller_name . '.php';

    // create the controller object
    $controller_class = '\\app\\controllers\\' . $controller_name;
    $controller = new $controller_class();

    // call the right action of the controller object
    echo $controller->$action_name();
}

// we get the array with the name of the controller and it's action from request
$controller_action = getControllerActionFromRequest();

//we run the right controller and it's action
runControllerMethod($controller_action['controller'], $controller_action['action']);