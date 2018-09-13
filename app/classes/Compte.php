<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 04/09/2018
 * Time: 21:53 PM
 */

class Compte
{
    public $num_client;
    public $num_compte;
    public $solde;
    public $id;


    /**
     * Compte constructor.
     * @param string $num_compte
     * @param int $num_client
     * @param float|null $solde
     * @param int $id
     */
    public function __construct(string $num_compte, int $num_client, float $solde = 0, int $id = 0)
    {
        $this->setNumClient($num_client);
        $this->setNumCompte($num_compte);
        $this->setId($id);
        $this->setSolde($solde);
    }

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
    public function setNumClient($num_client)
    {
        $this->num_client = $num_client;
    }

    /**
     * @return mixed
     */
    public function getNumCompte()
    {
        return $this->num_compte;
    }

    /**
     * @param mixed $num_compte
     */
    public function setNumCompte($num_compte)
    {
        $this->num_compte = $num_compte;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
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
    public function getId()
    {
        return $this->id;
    }

}