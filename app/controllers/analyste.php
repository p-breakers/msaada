<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 15/09/2018
 * Time: 21:56 PM
 */

class analyste extends controller implements controller_ie
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

    }
}