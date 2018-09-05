<?php

class Analyste extends Admin
{

    public $type = "analyste";

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
}
