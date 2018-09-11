<?php
/**
 * @param string $url
 * @return string
 */
function site_url(string $url)
{
    if (isset($GLOBALS["config"]['extension']))
        return "http://".$GLOBALS['config']['domain']."/".$url.".".$GLOBALS["config"]['url_suffix'];
    else
        return "http://".$GLOBALS['config']['domain']."/".$url.".php";
}