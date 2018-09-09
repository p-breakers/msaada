<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Db_connect
{
    /**
     * @return PDO
     */
    public static function getConnecion()
    {
        $HOST = "localhost";
        $USERNAME = "root";
        $PASSWORD = "";
        $DBNAME = "banque";
        $DSN = "mysql:host=$HOST;dbname=$DBNAME;charset=utf8";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ];
        try{
            $pdo = new PDO($DSN,$USERNAME,$PASSWORD,$opt);
        }catch(PDOException $e){
            die($e->__toString());
        }
        return $pdo;
    }
}
