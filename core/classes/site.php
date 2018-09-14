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

    /**
     * @param string $url
     * @return string
     */
    static function site_url(string $url)
    {
        if (isset($GLOBALS["config"]['url_suffix']))
            return "http://".$GLOBALS['config']['domain']."/".$url.$GLOBALS["config"]['url_suffix'];
        else
            return "http://".$GLOBALS['config']['domain']."/".$url.".php";
    }

    /**
     * @param string|null $page
     */
    static function redirect(string $page = null)
    {
        if ($page != null) $page .= $GLOBALS['config']['url_suffix'];
        header("location: http://".$GLOBALS['config']['domain']."/".$page);
    }
}