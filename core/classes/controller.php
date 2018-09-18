<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:26 PM
 */

class controller
{
    /**
     * controller constructor.
     */
    function __construct()
    {
        $GLOBALS["instances"][] = &$this;
        new session();
    }
}