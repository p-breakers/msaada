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
                load::view("errors::404");
                break;

            default:
                echo "Erreur inconnu !";
                break;
        }
    }
}