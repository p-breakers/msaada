<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
$GLOBALS["config"] = array();
$GLOBALS["config"]["BASE_URL"] = 'http://'.$_SERVER["SERVER_NAME"]."/banque/";
$GLOBALS["config"]["URL_SUFFIX"] = ".html";
$GLOBALS["config"]["APP_NAME"] = "Banque";
$GLOBALS["config"]["AUTHOR"] = "";
$GLOBALS["config"]["MAIL"] = "";
$GLOBALS["config"]["PHONE"] = "";
$GLOBALS["config"]["ACCOUNT_TYPE"] = ["ANALYSTE", "BANQUIER", "CLIENT"];
$GLOBALS["config"]["DB"] = array();
$GLOBALS["config"]["DB"]["HOST"] = "localhost";
$GLOBALS["config"]["DB"]["USERNAME"] = "root";
$GLOBALS["config"]["DB"]["PASSWORD"] = "";
$GLOBALS["config"]["DB"]["DBNAME"] = "banque";
$GLOBALS["config"]["PATH"] = [
    "app" => "app/",
    "core" => "core/",
    "index" => "index.php"
];
$GLOBALS["config"]["DEFAULTS"] = [
    "controller" => "main",
    "method" => "index"
];
$GLOBALS["config"]["routes"] = [];
include_once $GLOBALS["config"]["PATH"]['app']."config/init.php";