<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/21/2018
 * Time: 12:40 PM
 */

namespace backend\components;


class Helper
{
    public static function out($x)
    {
        echo '<pre>';
        print_r($x);
        echo '</pre>';
    }


    public static function GetRightAnswers($array)
    {
        $s = [];
        if (!empty($array['right_1'])) {
            $s[] = 1;
        }
        if (!empty($array['right_2'])) {
            $s[] = 2;
        }
        if (!empty($array['right_3'])) {
            $s[] = 3;
        }
        if (!empty($array['right_4'])) {
            $s[] = 4;
        }
        if (!empty($s)) {
            return implode(',', $s);
        }
        return null;
    }
}