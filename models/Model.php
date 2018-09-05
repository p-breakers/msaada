<?php
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