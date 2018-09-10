<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 22:49 PM
 */

class session
{
    /**
     * session constructor.
     */
    function __construct()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        foreach ($_COOKIE as $key => $value) {
            if(!isset($_SESSION[$key])){
                json_decode($value);
                if(json_last_error() == JSON_ERROR_NONE){
                    $_SESSION[$key] = json_decode($value);
                } else {
                    $_SESSION[$key] = $value;
                }
            }
        }
    }

    /**
     * @param string|array $key
     * @return bool|null
     */
    static function check($key)
    {
        if(is_array($key)){
            $set = true;
            foreach($key as $k){
                if(!session::check($k)){
                    $set = false;
                }
            }
        } else {
            $key = session::generateSessionKey($key);
            return isset($_SESSION[$key]);
        }
        return null;
    }

    /**
     * @param string $key
     * @return bool
     */
    static function get(string $key)
    {
        if (isset($_SESSION[session::generateSessionKey($key)])) {
            return $_SESSION[session::generateSessionKey($key)];
        } else {
            return false;
        }
    }

    /**
     * @param string $key
     * @param string $value
     * @param int $ttl
     */
    static function set(string $key, string $value, int $ttl = 0)
    {
        $_SESSION[session::generateSessionKey($key)] = $value;
        if ($ttl !== 0) {
            if(is_object($value) || is_array($value)){
                $value = json_encode($value);
            }
            setcookie(session::generateSessionKey($key), $value, (time() + $ttl), "/", $_SERVER["HTTP_HOST"]);
        }
    }

    /**
     * @param string $key
     */
    static function kill(string $key)
    {
        if(isset($_SESSION[session::generateSessionKey($key)])){
            unset($_SESSION[session::generateSessionKey($key)]);
        }
        if(isset($_COOKIE[session::generateSessionKey($key)])){
            setcookie(session::generateSessionKey($key), "", (time() - 5000), "/", $_SERVER["HTTP_HOST"]);
        }
    }

    static function endSession()
    {
        foreach ($_SESSION as $key => $value) {
            unset($_SESSION[$key]);
        }
        foreach($_COOKIE as $key => $value){
            setcookie($key, "", (time() - 5000), "/", "HTTP_HOST");
        }
        session_destroy();
    }

    /**
     * @param string $key
     * @return string
     */
    static function generateSessionKey(string $key)
    {
        $append = $GLOBALS['config']['appName'];
        $version = $GLOBALS['config']['version'];
        return md5($key.$append.$version);
    }
}