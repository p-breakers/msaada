<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:27 PM
 */

class router
{
    private $routes;

    /**
     * router constructor.
     */
    public function __construct()
    {
        $this->routes = $GLOBALS["config"]["routes"];
        $route = $this->findRoute();
        if (class_exists($route["controller"])) {
            $controller = new $route["controller"]();
            if(method_exists($controller, $route["method"])){
                $controller->$route["method"]();
            } else {
                error::show(404);
            }
        } else {
            error::show(404);
        }
    }

}