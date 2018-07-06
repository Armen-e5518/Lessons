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

    public static function GetVideoId($string)
    {
        parse_str(parse_url($string, PHP_URL_QUERY), $my_array_of_vars);
        return $my_array_of_vars['v'];
    }

    public static function Sorting($inventory)
    {
        $price = array();
        foreach ($inventory as $key => $row) {
            $price[$key] = $row['sorting'];
        }
        array_multisort($price, SORT_DESC, $inventory);
        return $price;
    }

    public static function GetIndex($lessons, $current_lesson)
    {
        if (!empty($lessons) && !empty($current_lesson)) {
            foreach ($lessons as $k => $l) {
                if ($l['id'] == $current_lesson['id']) {
                    return $k + 1;
                }
            }
        }
        return 0;
    }

    public static function seconds_from_time($time)
    {
        list($h, $m, $s) = explode(':', $time);
        return ($h * 3600) + ($m * 60) + $s;
    }

    public static function time_from_seconds($seconds)
    {
        $h = floor($seconds / 3600);
        $m = floor(($seconds % 3600) / 60);
        $s = $seconds - ($h * 3600) - ($m * 60);
        return sprintf('%02d:%02d:%02d', $h, $m, $s);
    }
}