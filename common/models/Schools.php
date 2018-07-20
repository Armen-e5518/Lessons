<?php

namespace common\models;

use backend\components\Helper;
use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property int $id
 * @property string $region
 * @property string $city
 * @property string $community
 * @property string $name
 * @property string $number
 * @property string $level
 * @property string $addres
 * @property string $tel
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region', 'city', 'community', 'name', 'number', 'level', 'addres', 'tel'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region' => 'Region',
            'city' => 'City',
            'community' => 'Community',
            'name' => 'Name',
            'number' => 'Number',
            'level' => 'Level',
            'addres' => 'Addres',
            'tel' => 'Tel',
        ];
    }

    public static function GetAllSchools()
    {
        return self::find()->select(['name', 'id'])->indexBy('id')->column();
    }
    public static function GetAllSchoolById($id)
    {
        return self::findOne($id)['name'];
    }
    public static function GetCityByRegion($id)
    {
        $city_ids = self::find()->select('city')->where(['region' => $id])->groupBy('city')->indexBy('city')->column();
        return City::find()->select(['name', 'id'])->where(['id' => $city_ids])->indexBy('id')->column();
    }

    public static function GetCommunity($region_id, $city_id)
    {
        $ids = self::find()->select('community')->where(['region' => $region_id, 'city' => $city_id])->groupBy('community')->indexBy('community')->column();
        return Community::find()->select(['name', 'id'])->where(['id' => $ids])->indexBy('id')->column();
    }

    public static function GetSchool($region_id, $city_id, $community_id)
    {
        return self::find()
            ->select(['name', 'id'])
            ->where(['region' => $region_id, 'city' => $city_id, 'community' => $community_id])
            ->groupBy('id')
            ->indexBy('id')
            ->column();
    }

}
