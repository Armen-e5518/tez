<?php
/**
 * Created by PhpStorm.
 * user: armen5518
 * Date: 11.05.2016
 * Time: 17:06
 */

namespace common\helpers;


class Helper
{
    public static function out($name)
    {
        echo '<pre>';
        print_r($name);
        echo '</pre>';
        exit();
    }


}