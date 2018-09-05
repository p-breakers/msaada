<?php
class Client
{
    public $num_client;
    public $nom_complet;
    public $adresse;
    public $nationalite;
    public $genre;
    public $phone;
    public $email;
    public $bday;
    private static $motdepasse;

    /**
     * @return mixed
     */
    public function getNumClient()
    {
        return $this->num_client;
    }

    /**
     * @param mixed $num_client
     */
    public function setNumClient($num_client): void
    {
        $this->num_client = $num_client;
    }

    /**
     * @return mixed
     */
    public function getNomComplet()
    {
        return $this->nom_complet;
    }

    /**
     * @param mixed $nom_complet
     */
    public function setNomComplet($nom_complet): void
    {
        $this->nom_complet = $nom_complet;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }
}
