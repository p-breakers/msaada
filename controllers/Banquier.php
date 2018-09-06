<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
}
