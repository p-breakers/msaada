<?php
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
}