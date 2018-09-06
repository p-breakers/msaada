<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 04/09/2018
 * Time: 20:49 PM
 */
$Config = array();
$Config["BASE_URL"] = 'http://'.$_SERVER["SERVER_NAME"]."/banque/";
$Config["URL_SUFFIX"] = ".html";
$Config["APP_NAME"] = "Banque";
$Config["AUTHOR"] = "";
$Config["MAIL"] = "";
$Config["PHONE"] = "";
$Config["ACCOUNT_TYPE"] = array("ANALYSTE", "BANQUIER", "CLIENT");
$Config["DB"] = array();
$Config["DB"]["HOST"] = "localhost";
$Config["DB"]["USERNAME"] = "root";
$Config["DB"]["PASSWORD"] = "";
$Config["DB"]["DBNAME"] = "banque";