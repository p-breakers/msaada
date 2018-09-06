<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 05/09/2018
 * Time: 18:21 PM
 */

class Model
{
    public $db;

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb(): void
    {
        $this->db = Db_connect::getConnecion();
    }

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->setDb();
    }
}