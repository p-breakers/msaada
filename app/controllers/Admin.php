<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
     * Admin constructor.
     * @param $id
     * @param $nom_complet
     * @param $phone
     * @param $motdepasse
     * @param $mail
     * @param $type
     */
    public function __construct($id, $nom_complet, $phone, $motdepasse, $mail, $type)
    {
        $this->id = $id;
        $this->nom_complet = $nom_complet;
        $this->phone = $phone;
        $this->motdepasse = $motdepasse;
        $this->mail = $mail;
        $this->type = $type;
    }


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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * @param mixed $motdepasse
     */
    public function setMotdepasse($motdepasse): void
    {
        $this->motdepasse = $motdepasse;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @param $password
     * @return bool|string
     */
    public function password_hash($password)
    {
        return password_hash($password, PASSWORD_ARGON2I,["cost" => 18]);
    }

    /**
     * @param $password
     * @param $encrypt
     * @return bool
     */
    public function password_verify($password, $encrypt)
    {
        return password_verify($password, $encrypt);
    }
}