<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 14/09/2018
 * Time: 21:04 PM
 */

class helper
{
    /**
     * @param string $string
     * @return string
     */
    static function htmlencode(string $string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8', TRUE);
    }
}