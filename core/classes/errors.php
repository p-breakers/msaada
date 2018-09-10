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
     * @param int $type
     */
    static function show(int $type){
        switch ($type) {
            case 404:
                echo "La page n'a pu &ecirc;tre trouv&eacute; ERREUR {$type} !";
                break;

            default:
                echo "Erreur inconnu !";
                break;
        }
    }
}