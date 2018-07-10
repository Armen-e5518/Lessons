<?php

namespace common\models;

use backend\components\Helper;
use Yii;

/**
 * This is the model class for table "choose_test_res".
 *
 * @property int $id
 * @property int $user_id
 * @property int $item_id
 * @property int $status
 * @property int $test_id
 * @property int $time
 */
class ChooseTestRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choose_test_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'item_id', 'status', 'test_id', 'time'], 'integer'],
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
            'item_id' => 'Item ID',
            'status' => 'Status',
            'test_id' => 'test_id',
            'time' => 'time',
        ];
    }


    public static function SaveTest($data)
    {
        if (!empty($data['male'])) {
            foreach ($data['male'] as $i) {
                $model = new self();
                $model->status = 1;
                $model->item_id = $i;
                $model->test_id = (int)$data['choose_test_id'];
                $model->user_id = Yii::$app->user->getId();
                $model->time = (int)Helper::seconds_from_time($data['time']);
                $model->save();

            }
            foreach ($data['female'] as $i) {
                $model = new self();
                $model->status = 0;
                $model->item_id = $i;
                $model->test_id = (int)$data['choose_test_id'];
                $model->user_id = Yii::$app->user->getId();
                $model->time = (int)Helper::seconds_from_time($data['time']);
                $model->save();
            }
            foreach ($data['female'] as $i) {
                $model = new self();
                $model->status = 2;
                $model->item_id = $i;
                $model->test_id = (int)$data['choose_test_id'];
                $model->user_id = Yii::$app->user->getId();
                $model->time = (int)Helper::seconds_from_time($data['time']);
                $model->save();
            }
        }
        return true;
    }
}
