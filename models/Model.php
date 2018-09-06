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
    private static $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        self::setDb();
    }


    /**
     * @return mixed
     */
    public static function getDb()
    {
        return self::$db;
    }

    /**
     *
     */
    public static function setDb(): void
    {
        self::$db = Db_connect::getConnecion();
    }
}