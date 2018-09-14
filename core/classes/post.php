<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 14/09/2018
 * Time: 19:00 PM
 */

class post
{
    public $encoded = [];
    public $get = [];

    public function __construct()
    {
        foreach ($_POST as $item => $value) {
            $this->encoded[$item] = helper::htmlencode($value);
            $this->get[$item] = $value;
        }
    }
}