<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pre_tests".
 *
 * @property int $id
 * @property string $pop_text
 * @property string $title
 */
class PreTests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pre_tests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pop_text'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pop_text' => 'Pop Text',
            'title' => 'Title',
        ];
    }

    public static function GetAll()
    {
        return self::find()->asArray()->all();
    }

}
