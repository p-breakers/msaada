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

    public function list_comptes()
    {
        $compte = new ClientDAO();
        $data['tables'] = $compte->getClientAttrName("compte");
        $data['comptes'] = $compte->getAllCompte();
        load::view("analyste::list_comptes", $data);
    }

    public function list_credits()
    {
        $compte = new ClientDAO();
        $data['tables'] = $compte->getClientAttrName("credit");
        $data['credits'] = $compte->getAllCredit();
        load::view("banquier::list_credits", $data);
    }

    public function demande_id()
    {
        $cl = new ClientDAO();
        $id = url::get("id");
        $dmd = $cl->getDemande($id);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $post = new post();
            $d = $cl->identif_risq($post->encoded['id_dmd'], $post->encoded['cap_perm'], $post->encoded['val_imm'], $post->encoded['cap_cr'], $post->encoded['actif'], $post->encoded['facteur'], $post->encoded['id_client']);
            if ($d) {
                site::redirect("analyst");
            } else
                site::redirect();
        } else {
            $data['cl'] = $dmd;
            if (!is_array($data['cl'])) {
                site::redirect("analyst");
                exit;
            } else
                load::view("analyste::demande_id", $data);
        }

    }
}