<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 21:37 PM
 */

class database
{
    private $object;
    private $result;
    public $current_field = "";
    public $lengths = "";
    public $num_rows = "";

    function __construct($host, $username, $password, $database = null)
    {
        if(is_null($database)){
            $this->obj = new mysqli($host, $username, $password);
        } else {
            $this->obj = new mysqli($host, $username, $password, $database);
        }
    }

    function changeDB($database)
    {
        $this->obj->select_db($database);
    }
}