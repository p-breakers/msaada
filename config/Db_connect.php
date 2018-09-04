<?php
class Db_connect
{
    public function getConnecion()
    {
        $HOST = "localhost";
        $USERNAME = "root";
        $PASSWORD = "";
        $DBNAME = "banque";
        $DSN = "mysql:host=$HOST;dbname=$DBNAME;charset=utf8";
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
        try{
            $pdo = new PDO($DSN,$USERNAME,$PASSWORD,$opt);
        }catch(PDOException $e){
            die($e->__toString());
        }
        return $pdo;
    }
}
