<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 06/09/2018
 * Time: 19:58 PM
 */

class ClientDAO extends Model
{
    public $num_client, $nom_complet, $adresse, $nationalite, $genre, $phone, $email, $bday;
    private $motdepasse;
}