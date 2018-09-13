<?php
/**
 * @param string|null $string
 * @return string
 */
function base_url(string $string = null)
{
    return "http://".$GLOBALS['config']['domain']."/".$string;
}