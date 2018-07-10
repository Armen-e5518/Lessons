<?php

namespace common\models;

use backend\components\Helper;
use Yii;

/**
 * This is the model class for table "drag_test_res".
 *
 * @property int $id
 * @property int $user_id
 * @property int $test_id
 * @property int $time
 * @property int $global_lesson_id
 */
class DragTestRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drag_test_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'test_id', 'time', 'global_lesson_id'], 'integer'],
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
            'test_id' => 'Test ID',
            'time' => 'Time',
            'global_lesson_id' => 'global_lesson_id',
        ];
    }

    public static function SaveDragTest($data)
    {
        if (!empty($data)) {
            $model = self::findOne([
                'user_id' => Yii::$app->user->getId(),
                'test_id' => $data['drag_test_id'],
                'global_lesson_id' => $data['global_lesson_id']
            ]);
            if (empty($model)) {
                $model = new self();
                $model->user_id = Yii::$app->user->getId();
                $model->test_id = $data['drag_test_id'];
                $model->global_lesson_id = $data['global_lesson_id'];
                $model->time = Helper::seconds_from_time($data['time']);
                return $model->save();
            } else {
                $model->time = Helper::seconds_from_time($data['time']);
                return $model->save();
            }
        }
        return false;
    }
}
