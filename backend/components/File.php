<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/21/2018
 * Time: 12:40 PM
 */

namespace backend\components;


class File
{

    public static function Uploads($file, $name)
    {
        if (!empty($file["test"]["name"][$name]['img'])) {
            $target_file = \Yii::$app->params['uploads'] . basename($file["test"]["name"][$name]['img']);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if ($file["test"]["size"][$name]['img'] > 500000) {
                return false;
            }
            if ($imageFileType != "jpg"
                && $imageFileType != "png"
                && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                return false;
            } else {
                $file_name = md5(microtime(true)) . '.' . $imageFileType;
            }
            if (move_uploaded_file($file["test"]["tmp_name"][$name]['img'],
                \Yii::$app->params['uploads'] . $file_name)) {
                return $file_name;
            };
            return null;
        }
    }
}