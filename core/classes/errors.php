<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:13 PM
 */

class errors
{
    /**
     * @param $type
     */
    static function show($type){
        switch ($type) {
            case 404:
                echo "La page !<br>{$type} n'a pu &egrave;tre trouv&acute; ERREUR !";
                break;

            default:
                echo "Erreur inconnu !";
                break;
        }
    }
}