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

    public static function get()
    {
        $model = new self();
        $region_id = null;
        $city_id = null;
        $Community = null;
        $data = $model->find()->asArray()->all();
        foreach ($data as $d) {
            if (empty($d['name'])) {
                self::deleteAll(['id' => $d['id']]);
            }
//            if (!is_numeric($d['region'])) {
//                $region_id = Region::find()->where(['name' => $d['region']])->one()['id'];
//                Helper::out($d['region']);
//                Helper::out($region_id);
//            }
//            if (!empty($d['city'])) {
//                $city = City::find()->where(['name' => $d['city']])->one();
//                if (empty($city)) {
//                    $m = new City();
//                    $m->name = $d['city'];
//                    $m->save();
//                    $city_id = $m->id;
//                } else {
//                    $city_id = $city['id'];
//                }
//            }
//            if (!empty($d['community'])) {
//                $Community = Community::find()->where(['name' => $d['community']])->one();
//                if (empty($Community)) {
//                    $m = new Community();
//                    $m->name = $d['community'];
//                    $m->save();
//                    $Community_id = $m->id;
//                } else {
//                    $Community_id = $Community['id'];
//                }
//            }
//            if (!empty($region_id) && !empty($city_id) && !empty($Community)) {
//                $mm = self::findOne(['id' => $d['id']]);
//                $mm->region =(string) $region_id;
//                $mm->city = (string)$city_id;
//                $mm->community = (string)$Community_id;
//                if((!$mm->save())){
//                    Helper::out($city_id);
//                    Helper::out($mm->getErrors());
//                };
//                echo  '<br>';
//            }else{
//                echo  'Nooooooooooooo';
//                echo  '<br>';
//            }
//            $region_id = null;
//            $city_id = null;
//            $Community_id = null;
        }
    }
}
