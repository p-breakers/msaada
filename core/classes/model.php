<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 22:41 PM
 */

class model
{
    public $model;

    /**
     * model constructor.
     */
    function __construct(){
        $this->model = new database($GLOBALS["config"]["database"]["host"],
            $GLOBALS["config"]["database"]["username"],
            $GLOBALS["config"]["database"]["password"],
            $GLOBALS["config"]["database"]["database"]);
    }
}