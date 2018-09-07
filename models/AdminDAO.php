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

    /**
     * @param string $email
     * @param string $motdepasse
     * @return Analyste|Banquier|bool|string
     */
    public function connexion(string $email, string $motdepasse)
    {
        try{
            $this->q = $this->db->prepare("SELECT * FROM admin WHERE mail = :email OR phone = :phone OR nom_complet = :nom_complet");
            $this->q->execute([
                "email" => $email,
                "phone" => $email,
                "nom_complet" => $email
            ]);
            $admin = "";
            if ($this->q->type == "banquier")
                $admin = new Banquier($this->q->id, $this->q->nom_complet, $this->q->phone, $this->q->motdepasse, $this->q->mail);
            elseif ($this->q->type == "analyste")
                $admin = new Analyste($this->q->id, $this->q->nom_complet, $this->q->phone, $this->q->motdepasse, $this->q->mail);
            if ($admin->password_verify($motdepasse, $admin->getMotdepasse()) !== true)
                $admin = false;
        }catch (PDOException $e){
            $admin = $e->__toString();
        }finally{
            return $admin;
        }
    }
}