<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
$GLOBALS["config"] = array(
    "addName" => "Banque",
    "domain" => "localhost",
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
include_once $GLOBALS["config"]["path"]['core']."autoload.php";