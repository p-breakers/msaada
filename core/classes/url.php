<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 23:19 PM
 */

class url
{
    /**
     * @param int $number
     * @return bool
     */
    static function part(int $number)
    {
        $uri = explode("?", $_SERVER["REQUEST_URI"]);
        $parts = explode("/", $uri[0]);
        return(isset($parts[$number])) ? $parts[$number] : false;
    }

    /**
     * @param string $key
     * @return bool
     */
    static function post(string $key)
    {
        return(isset($_POST[$key])) ? $_POST[$key] : false;
    }

    /**
     * @param string $key
     * @return bool|string
     */
    static function get(string $key)
    {
        return(isset($_GET[$key])) ? urldecode($_GET[$key]) : false;
    }

    /**
     * @param string $key
     * @return bool|null|string
     */
    static function request(string $key)
    {
        if (url::get($key)) {
            return url::get($key);
        } elseif (url::post($key)) {
            url::post($key);
        } else {
            return false;
        }
        return null;
    }

    /**
     * @param string $url
     * @param array $params
     * @return string
     */
    static function build(string $url, array $params = array())
    {
        if(strpos($url, "//") === false){
            $prefix = "//".$GLOBALS["config"]["domain"];
        } else {
            $prefix = "";
        }
        $append = "";
        foreach($params as $key => $params){
            $append .= ($append == "") ? "?" : "&";
            $append .= urlencode($key)."=".urlencode($params);
        }
        return $prefix.$append;
    }

    /**
     * @param string $url
     * @return string
     */
    static function simple(string $url)
    {
        if(strpos($url, "//") === false){
            $prefix = "//".$GLOBALS["config"]["domain"];
        } else {
            $prefix = "";
        }
        return $prefix;
    }
}