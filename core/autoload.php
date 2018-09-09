<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:08 PM
 */

spl_autoload_register(function($class){
    $corePath = $GLOBALS["config"]["path"]["core"];
    $appPath = $GLOBALS["config"]["path"]["app"];
    if(file_exists("{$corePath}abstracts/{$class}.php")){
        require_once "{$corePath}abstracts/{$class}.php";
    } elseif(file_exists("{$corePath}classes/{$class}.php")){
        require_once "{$corePath}classes/{$class}.php";
    } elseif(file_exists("{$corePath}interfaces/{$class}.php")){
        require_once "{$corePath}interfaces/{$class}.php";
    } elseif(file_exists("{$appPath}controllers/{$class}.php")){
        require_once "{$appPath}controllers/{$class}.php";
    } elseif(file_exists("{$appPath}libs/{$class}.php")){
        require_once "{$appPath}libs/{$class}.php";
    } elseif(file_exists("{$appPath}libs/{$class}.php")){
        require_once "{$appPath}libs/{$class}.php";
    } elseif(file_exists("{$appPath}models/{$class}.php")){
        require_once "{$appPath}models/{$class}.php";
    } elseif(file_exists("{$appPath}interfaces/{$class}.php")){
        require_once "{$appPath}interfaces/{$class}.php";
    } elseif(file_exists("{$appPath}abstracts/{$class}.php")){
        require_once "{$appPath}abstracts/{$class}.php";
    }
}
);