<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 09/09/2018
 * Time: 22:20 PM
 */

class load
{
    /**
     * @param string $viewFile
     * @param array $viewVars
     */
    static function view(string $viewFile, array  $viewVars = array()){
        extract($viewVars);
        $viewFileCheck = explode(".", $viewFile);
        if(!isset($viewFileCheck[1])){
            $viewFile .= ".php";
        }
        $viewFile = str_replace("::", "/", $viewFile);
        require_once $GLOBALS["config"]["path"]["app"]."views/{$viewFile}";
    }
}