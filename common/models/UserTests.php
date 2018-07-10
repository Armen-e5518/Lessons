<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_tests".
 *
 * @property int $id
 * @property int $user_id
 * @property int $time
 * @property int $status
 * @property int $test_id
 * @property int $point
 * @property int $test_type
 */
class UserTests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_tests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'time', 'status', 'test_id', 'point','test_type'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'time' => 'Time',
            'status' => 'Status',
            'test_id' => 'Test ID',
            'point' => 'point',
        ];
    }

    public static function GetCurrentUserTestsState()
    {
        return self::find()->where(['user_id' => Yii::$app->user->getId()])->asArray()->all();
    }
}
