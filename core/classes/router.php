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

    /**
     * @param $route
     * @return array
     */
    private function routePart($route)
    {
        if (is_array($route)) {
            $route = $route["url"];
        }
        $parts = explode("/", $route);
        return $parts;
    }

    /**
     * @param $part
     * @return string
     */
    static function uri($part)
    {
        $parts = explode("/", $_SERVER["REQUEST_URI"]);
        if (empty($parts[0])) {
            array_shift($parts);
        }
        if($parts[1] == $GLOBALS["config"]["path"]["index"]){
            $part++;
        }
        return (isset($parts[$part])) ? $parts[$part] : "";
    }

    private function findRoute()
    {
        foreach ($this->routes as $route) {
            $parts = $this->routePart($route);
            $allMatch = true;
            foreach ($parts as $key => $value) {
                if ($value != "*"){
                    if(router::uri($key) != $value){
                        $allMatch = false;
                    }
                }
            }
            if($allMatch){
                return $route;
            }
        }
        $uri_1 = router::uri(1);
        $uri_2 = router::uri(2);
        if ($uri_1 == "") {
            $uri_1 = $GLOBALS["config"]["defaults"]["controller"];
        }
        if ($uri_2 == "") {
            $uri_2 = $GLOBALS["config"]["defaults"]["method"];
        }
        $route = array(
            "controller" => $uri_1,
            "method" => $uri_2
        );
        return $route;
    }
}