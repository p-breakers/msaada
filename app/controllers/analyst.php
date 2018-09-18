<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 15/09/2018
 * Time: 21:56 PM
 */

class analyst extends controller implements controller_ie
{
    public function __construct()
    {
        parent::__construct();
        if (session::check("id_admin") === false) site::redirect(); else {
            if (session::get("type") != "analyste") {
                site::redirect();
            }
        }
    }

    public function index()
    {
        if (session::check("type")) {
            if (session::get("type") != "analyste") site::redirect(); else {
                load::view("main::analyste");
            }

        } else {
            site::redirect();
        }
    }
}