<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 22:49 PM
 */

class session
{
    function __construct(){
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

    static function check($key){
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

    static function get($key){
        if (isset($_SESSION[session::generateSessionKey($key)])) {
            return $_SESSION[session::generateSessionKey($key)];
        } else {
            return false;
        }
    }
}