<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 05/09/2018
 * Time: 18:16 PM
 */

class AdminDAO extends Model2
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $email
     * @param string $motdepasse
     * @return analyst|bankier|bool|string
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
            $result = $this->q->fetch();
            if ($result['type'] == "banquier") $admin = new banquier($result['id_admin'], $result['nom_complet'], $result['phone'], $result['motdepasse'], $result['mail']); elseif ($result['type'] == "analyste") $admin = new analyste($result['id_admin'], $result['nom_complet'], $result['phone'], $result['motdepasse'], $result['mail']);
            if (Admin::password_verify($motdepasse, $admin->getMotdepasse()) !== true) $admin = false; else
                foreach ($result as $item => $value) session::set($item, $value);
        }catch (PDOException $e){
            $admin = $e->__toString();
        }finally{
            return $admin;
        }
    }
}