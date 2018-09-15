<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 06/09/2018
 * Time: 19:58 PM
 */

class ClientDAO extends Model2
{
    public $num_client, $nom_complet, $adresse, $nationalite, $genre, $phone, $email, $bday;
    private $motdepasse;


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
        return new Client($this->q->num_client, $this->q->nom_complet, $this->q->adresse, $this->q->nationalite,
            $this->q->genre, $this->q->phone, $this->q->email, $this->q->bday, $this->q->motdepasse);
    }

    /**
     * @param $num_client
     * @param $nom_complet
     * @param $adresse
     * @param $nationalite
     * @param $genre
     * @param $phone
     * @param $email
     * @param $bday
     * @param $motdepasse
     * @return bool|string
     */
    public function addClient($num_client, $nom_complet, $adresse, $nationalite, $genre, $phone, $email, $bday, $motdepasse){
        try{
            $this->q = $this->db->prepare("INSERT INTO 
              clients(num_client, nom_complet, adresse, nationalite, genre, phone, email, bday, motdepasse) 
              VALUES(:num_client, :nom_complet, :adresse, :nationalite, :genre, :phone, :email, :bday, :motdepasse)");
            $this->q->execute([
                "num_client" => $num_client,
                "nom_complet" => $nom_complet,
                "adresse" => $adresse,
                "nationalite" => $nationalite,
                "genre" => $genre,
                "phone" => $phone,
                "email" => $email,
                "bday" => $bday,
                "motdepasse" => $motdepasse
            ]);
            $this->d = true;
        }catch (PDOException $e){
            $this->d = $e->getMessage();
        }finally{
            return $this->d;
        }
    }

    /**
     * @return string|array
     */
    public function getAllClient()
    {
        try {
            $this->q = $this->db->prepare("SELECT * FROM clients");
            $this->q->execute();
            $this->d = $this->q->fetch();
        } catch (PDOException $e) {
            $this->d = $e->__toString();
        } finally {
            return $this->d;
        }
    }
}