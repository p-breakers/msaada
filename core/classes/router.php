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
                $method = $route['method'];
                $controller->$method();
            } else {
                errors::show(404);
            }
        } else {
            errors::show(404);
        }
    }

    /**
     * @param string $route
     * @return array
     */
    private function routePart(string $route)
    {
        if (is_array($route)) {
            $route = $route["url"];
        }
        $parts = explode("/", $route);
        return $parts;
    }

    /**
     * @param int $part
     * @return string
     */
    static function uri(int $part)
    {
        $parts = explode("/", $_SERVER["REQUEST_URI"]);
        $parts[count($parts) - 1] = explode("?", $parts[count($parts) - 1])[0];
        $parts[count($parts) - 1] = str_replace($GLOBALS['config']['url_suffix'], "", end($parts));
        if($parts[1] == $GLOBALS["config"]["path"]["index"]){
            $part++;
        }
        return (isset($parts[$part])) ? $parts[$part] : "";
    }

    /**
     * @return array
     */
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