<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 14/09/2018
 * Time: 00:09 AM
 */

class site
{
    /**
     * @param string|null $string
     * @return string
     */
    static function base_url(string $string = null)
    {
        return "http://".$GLOBALS['config']['domain']."/".$string;
    }
}