<?php
spl_autoload_register(function($class){
    $corePath = $GLOBALS["config"]["path"]["core"];
    $appPath = $GLOBALS["config"]["path"]["app"];
    if(file_exists("{$corePath}abstracts/{$class}.php")){
        $instantiable = false;
        require_once "{$corePath}abstracts/{$class}.php";
    } elseif(file_exists("{$corePath}classes/{$class}.php")){
        $instantiable = true;
        require_once "{$corePath}classes/{$class}.php";
    } elseif (file_exists("{$appPath}classes/{$class}.php")) {
        $instantiable = false;
        require_once "{$appPath}classes/{$class}.php";
    } elseif(file_exists("{$corePath}interfaces/{$class}.php")){
        $instantiable = false;
        require_once "{$corePath}interfaces/{$class}.php";
    } elseif(file_exists("{$appPath}controllers/{$class}.php")){
        $instantiable = true;
        require_once "{$appPath}controllers/{$class}.php";
    } elseif(file_exists("{$appPath}libs/{$class}.php")){
        $instantiable = false;
        require_once "{$appPath}libs/{$class}.php";
    } elseif(file_exists("{$appPath}libs/{$class}.php")){
        $instantiable = true;
        require_once "{$appPath}libs/{$class}.php";
    } elseif(file_exists("{$appPath}models/{$class}.php")){
        $instantiable = true;
        require_once "{$appPath}models/{$class}.php";
    } elseif(file_exists("{$appPath}interfaces/{$class}.php")){
        $instantiable = false;
        require_once "{$appPath}interfaces/{$class}.php";
    } elseif(file_exists("{$appPath}abstracts/{$class}.php")){
        $instantiable = false;
        require_once "{$appPath}abstracts/{$class}.php";
    }
    if (!isset($instantiable))
        $instantiable = false;
    if($instantiable){
        foreach ($GLOBALS["instances"] as $instance) {
            $instance->$class = new $class();
        }
    }
}
);
