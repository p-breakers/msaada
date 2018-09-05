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
}
