<?php

class Analyste extends Admin
{

    /**
     * Analyste constructor.
     */
    public $type = "analyste";
    public function __construct($id, $nom_complet, $phone, $motdepasse, $mail)
    {
        parent::__construct($id, $nom_complet, $phone, $motdepasse, $mail, $this->type);
    }
}
