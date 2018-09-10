<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:26 PM
 */

class controller
{
    function __construct()
    {
        $GLOBALS["instances"][] = &$this;
    }
}