<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 15/09/2018
 * Time: 21:56 PM
 */

class bankier extends controller implements controller_ie
{
    public function __construct()
    {
        parent::__construct();
        if (session::check("id_admin") === false) site::redirect(); else {
            if (session::get("type") != "banquier") {
                site::redirect();
            }
        }
    }

    public function index()
    {
        $clientDao = new ClientDAO();
        if (session::check("type")) {
            if (session::get("type") != "banquier") site::redirect(); else {
                $data['nbDemande'] = $clientDao->nbDemande();
                $data['nbClient'] = $clientDao->nbClients();
                load::view("main::banquier", $data);
            }
        } else {
            site::redirect();
        }
    }

    public function add_client()
    {
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            load::view("banquier::add_client");
        } else {
            $post = new post();
            $client = new ClientDAO();
            $q = $client->addClient($post->encoded['nom'], $post->encoded['adresse'], $post->encoded['nationalite'], $post->encoded['genre'], $post->encoded['phone'], $post->encoded['email'], $post->encoded['bday'], Admin::password_hash("123456"));
            if ($q === true) site::redirect(); else
                site::redirect("bankier/add_client");
        }
    }

    public function add_demande()
    {
        $clientDao = new ClientDAO();
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            $data['clients'] = $clientDao->getAllClient();
            load::view("banquier::add_demande", $data);
        } else {
            $post = new post();
            $q = $clientDao->addDemande($post->encoded['id_client'], $post->encoded['libelle'], $post->encoded['message']);
            if ($q === true) site::redirect(); else
                site::redirect("bankier/add_demande");
        }
    }

    public function list_clients()
    {
        $client = new ClientDAO();
        $data['tables'] = $client->getClientAttrName();
        $data['clients'] = $client->getAllClient();
        load::view("banquier::list_clients", $data);
    }
}