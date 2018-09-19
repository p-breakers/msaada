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
        $clientDao = new ClientDAO();
        if (session::check("type")) {
            if (session::get("type") != "analyste") site::redirect(); else {
                $data['nbDemande'] = $clientDao->nbDemande();
                $data['nbClient'] = $clientDao->nbClients();
                $data['nbCompte'] = $clientDao->nbCompte();
                $data['nbCredit'] = $clientDao->nbCredit();
                load::view("main::analyste", $data);
            }
        } else {
            site::redirect();
        }
    }

    public function list_demandes()
    {
        $compte = new ClientDAO();
        $data['tables'] = $compte->getClientAttrName("demande");
        $data['demandes'] = $compte->getAllDemande();
        load::view("analyste::list_demandes", $data);
    }
}