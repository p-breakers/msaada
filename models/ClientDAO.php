<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 06/09/2018
 * Time: 19:58 PM
 */

class ClientDAO extends Model
{
    public $num_client, $nom_complet, $adresse, $nationalite, $genre, $phone, $email, $bday;
    private $motdepasse, $q;


    /**
     * @param $num_client
     * @return Client
     */
    public function getClient($num_client)
    {
        $this->q = $this->db->prepare("SELECT * FROM clients WHERE num_client = :num_client");
        $this->q->execute([
            "num_client" => $num_client
        ]);
        return new Client($this->q->num_client, $this->q->nom_complet, $this->q->adresse, $this->q->nationalite, $this->q->genre, $this->q->phone, $this->q->email, $this->q->bday, $this->q->motdepasse);
    }

    public function addClient(){

    }
}