<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 23:19 PM
 */

class url
{
    static function part($number)
    {
        $uri = explode("?", $_SERVER["REQUEST_URI"]);
        $parts = explode("/", $uri[0]);
        return(isset($parts[$number])) ? $parts[$number] : false;
    }
}