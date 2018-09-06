<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 05/09/2018
 * Time: 18:16 PM
 */

class AdminDAO extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function connexion(string $email, string $motdepasse)
    {
        $this->q = $this->db->prepare("SELECT * FROM admin WHERE (mail = :email OR phone = :phone OR nom_complet = :nom_complet) 
            AND motdepasse = :motdepasse");
        $this->q->execute([
            "email" => $email,
            "phone" => $email,
            "nom_complet" => $email,
            "motdepasse" => $motdepasse
        ]);
        if ($this->q->type == "banquier")
            return new Banquier($this->q->id, $this->q->nom_complet, $this->q->phone, $this->q->motdepasse, $this->q->mail);
        elseif ($this->q->type == "analyste")
            return new Analyste($this->q->id, $this->q->nom_complet, $this->q->phone, $this->q->motdepasse, $this->q->mail);
        else
            return "error";
    }
}