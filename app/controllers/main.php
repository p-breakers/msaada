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
        if (session::get('user'))
            load::view("main::index");
        else
            site::redirect("main/login");
    }

    function login()
    {
        if (!session::get('user'))
            load::view("main::login");
        else
            site::redirect();
    }

    function login_verify()
    {
        //TODO: Implement this method
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

        }
    }
}