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


}