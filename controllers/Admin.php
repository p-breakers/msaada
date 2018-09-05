<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 05/09/2018
 * Time: 13:15 PM
 */

class Admin
{
    public $id;
    public $nom_complet;
    public $phone;
    private $motdepasse;
    public $mail;
    public $type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

}