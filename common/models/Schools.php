<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property int $F1
 * @property string $id
 * @property string $marz
 * @property string $shrjan
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
            [['id', 'marz', 'shrjan', 'name', 'number', 'level', 'addres', 'tel'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'F1' => 'F1',
            'id' => 'ID',
            'marz' => 'Marz',
            'shrjan' => 'Shrjan',
            'name' => 'Name',
            'number' => 'Number',
            'level' => 'Level',
            'addres' => 'Addres',
            'tel' => 'Tel',
        ];
    }
}
