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
                echo "La page ! {$type} n'a pu &ecirc;tre trouv&eacute; ERREUR !";
                break;

            default:
                echo "Erreur inconnu !";
                break;
        }
    }
}