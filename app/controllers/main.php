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
        if (session::check('id_admin'))
            load::view("main::index");
        else
            site::redirect("main/login");
    }

    function login()
    {
        if (!session::check('id_admin'))
            load::view("main::login");
        else
            site::redirect();
    }

    function login_verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $post = new post();
            $adminDAO = new AdminDAO();
            $admin = $adminDAO->connexion($post->encoded['name'], $post->get['password']);
            if ($admin) {
                site::redirect("main/" . $admin->type);
            } else
                site::redirect();
        } else {
            site::redirect();
        }
    }

    function banquier()
    {
        if (session::check("type") !== "banquier") site::redirect(); else {
            load::view("main::banquier");
        }
    }

    function analyste()
    {
        if (session::check("type") !== "analyste") site::redirect(); else {
            load::view("main::analyste");
        }
    }

    public function test()
    {
        echo Admin::password_hash("123456");
    }

    function deconnexion()
    {
        session::endSession();
        site::redirect();
    }
}