<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:36 PM
 */

class main extends controller implements controller_ie
{
    function index()
    {
        if (isset($_SESSION['user']))
            load::view("main::index");
        else
            site::redirect("main/login");
    }

    function login()
    {
        if (!isset($_SESSION['user']))
            load::view("main::login");
        else
            site::redirect();
    }
}