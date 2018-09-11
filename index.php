<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
/** @var array $GLOBALS['config'] contains all configuration */
$GLOBALS["config"] = array(
    "appName" => "Banque",
    "version" => "1.0.0",
    "domain" => $_SERVER['SERVER_NAME'],
    "path" => array(
        "app" => "app/",
        "core" => "core/",
        "index" => "index.php"
    ),
    "defaults" => array(
        "controller" => "main",
        "method" => "index"
    ),
    "routes" => array(),
    "database" => array(
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "name" => "banque"
    )
);
/** @var array $GLOBALS['instances'] contains all object */
$GLOBALS["instances"] = array();
/** @var string $GLOBALS["config"]["path"]['core']."autoload.php" contains autoload path and
 * help us to autoload controllers, models, libs, etc.
 */
include_once $GLOBALS["config"]["path"]['core']."autoload.php";
new router();