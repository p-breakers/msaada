<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 04/09/2018
 * Time: 20:49 PM
 */
// ===============================================================
//          APP - CONFIG
//================================================================
$GLOBALS["config"] = array();
$GLOBALS["config"]["BASE_URL"] = '';
$GLOBALS["config"]["URL_SUFFIX"] = "";
$GLOBALS["config"]["APP_NAME"] = "";
$GLOBALS["config"]["AUTHOR"] = "";
$GLOBALS["config"]["MAIL"] = "";
$GLOBALS["config"]["PHONE"] = "";
// ===============================================================
//          DATABASE - CONFIG
//================================================================
$GLOBALS["config"]["DB"] = array();
$GLOBALS["config"]["DB"]["HOST"] = "";
$GLOBALS["config"]["DB"]["USERNAME"] = "";
$GLOBALS["config"]["DB"]["PASSWORD"] = "";
$GLOBALS["config"]["DB"]["DBNAME"] = "";
// ===============================================================
//          FOLDER - CONFIG
//================================================================
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

