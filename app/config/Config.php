<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 04/09/2018
 * Time: 20:55 PM
 */

class Config
{
    public $database;
    public function __construct()
    {
        $this->database = Db_connect::getConnecion();
    }
}