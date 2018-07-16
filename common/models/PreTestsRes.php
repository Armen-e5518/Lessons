<?php

namespace common\models;

use backend\components\Helper;
use Yii;

/**
 * This is the model class for table "pre_tests_res".
 *
 * @property int $id
 * @property int $user_id
 * @property int $test_id
 * @property string $answer
 * @property int $time
 * @property int $status
 */
class PreTestsRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pre_tests_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'test_id', 'time', 'status'], 'integer'],
            [['answer'], 'string', 'max' => 10],
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
            'answer' => 'Answer',
            'time' => 'Time',
            'status' => 'Status',
        ];
    }

    public static function SaveUserAnswer($data)
    {
        if (!empty($data['test'])) {
            $answers = [];
            foreach ($data['test'] as $id => $d) {
                $answer = !empty($d['rad']) ? $d['rad'] : implode(',', array_keys($d));
                $model = new self();
                $model->user_id = Yii::$app->user->getId();
                $model->test_id = $id;
                $model->time = Helper::seconds_from_time($data['timer']);
                $model->answer = $answer;
                $model->save();
                $answers['answers'][$id] = $answer;
                $answers['ids'][] = $id;
            }
            return $answers;
        }
        return false;
    }
}
