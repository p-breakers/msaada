<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:36 PM
 */

class main extends controller implements controller_ie
{

    /**
     * @return mixed|void
     */
    function index()
    {
        load::view('welcome');
    }
}