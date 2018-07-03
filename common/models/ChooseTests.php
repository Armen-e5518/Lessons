<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "choose_tests".
 *
 * @property int $id
 * @property string $text_pop
 * @property string $title
 */
class ChooseTests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choose_tests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_pop', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_pop' => 'Text Pop',
            'title' => 'Title',
        ];
    }
    public static function GetAll()
    {
        return self::find()->asArray()->all();
    }

}
