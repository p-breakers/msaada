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

    /**
     * @param int $length
     * @return string
     */
    static function randomString(int $length = 12)
    {
        $str = "";
        $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}