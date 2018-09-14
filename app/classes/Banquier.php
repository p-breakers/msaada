<?php
class Banquier extends Admin
{
    public $type = "banquier";

    /**
     * Analyste constructor.
     * @param $id
     * @param $nom_complet
     * @param $phone
     * @param $motdepasse
     * @param $mail
     */
    public function __construct($id, $nom_complet, $phone, $motdepasse, $mail)
    {
        parent::__construct($id, $nom_complet, $phone, $motdepasse, $mail, $this->type);
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
     * @return Client
     */
    public function addClient($num_client, $nom_complet, $adresse, $nationalite, $genre, $phone, $email, $bday, $motdepasse)
    {
        $motdepasse = $this->password_hash($motdepasse);
        return new Client($num_client, $nom_complet, $adresse, $nationalite, $genre, $phone, $email, $bday, $motdepasse);
    }
}
