<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 04/09/2018
 * Time: 20:49 PM
 */
$GLOBALS["config"] = array();
$GLOBALS["config"]["BASE_URL"] = 'http://' . $_SERVER["SERVER_NAME"];
$GLOBALS["config"]["URL_SUFFIX"] = ".html";
$GLOBALS["config"]["APP_NAME"] = "Banque";
$GLOBALS["config"]["AUTHOR"] = "";
$GLOBALS["config"]["MAIL"] = "";
$GLOBALS["config"]["PHONE"] = "";
$GLOBALS["config"]["ACCOUNT_TYPE"] = array("ANALYSTE", "BANQUIER", "CLIENT");
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

