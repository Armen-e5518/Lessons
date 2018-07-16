<?php

namespace common\models;

use backend\components\Helper;
use Yii;

/**
 * This is the model class for table "tests_question".
 *
 * @property int $id
 * @property int $pre_test_id
 * @property string $question
 * @property string $answer_1
 * @property string $answer_2
 * @property string $answer_3
 * @property string $answer_4
 * @property string $answer_5
 * @property string $answer_6
 * @property string $answer_7
 * @property string $answer_8
 * @property string $answer_9
 * @property string $answer_10
 * @property string $right_answers
 *
 * @property PreTests $preTest
 */
class TestsQuestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tests_question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pre_test_id'], 'integer'],
            [['question',
                'answer_1',
                'answer_5',
                'answer_6',
                'answer_7',
                'answer_8',
                'answer_9',
                'answer_10',
                'answer_2', 'answer_3', 'answer_4', 'right_answers'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pre_test_id' => 'Pre Test ID',
            'question' => 'Question',
            'answer_1' => 'Answer 1',
            'answer_2' => 'Answer 2',
            'answer_3' => 'Answer 3',
            'answer_4' => 'Answer 4',
            'right_answers' => 'Right Answers',
        ];
    }

    public static function SaveTestsQuestion($id, $data)
    {
        self::deleteAll(['pre_test_id' => $id]);
        if (!empty($data['test'])) {
            foreach ($data['test'] as $item) {
                if (!empty($item['question'])) {
                    $model = new self();
                    $model->pre_test_id = $id;
                    $model->question = $item['question'];
                    $model->answer_1 = $item['answer_1'];
                    $model->answer_2 = $item['answer_2'];
                    $model->answer_3 = $item['answer_3'];
                    $model->answer_4 = $item['answer_4'];
                    $model->answer_5 = $item['answer_5'];
                    $model->answer_6 = $item['answer_6'];
                    $model->answer_7 = $item['answer_7'];
                    $model->answer_8 = $item['answer_8'];
                    $model->answer_9 = $item['answer_9'];
//                    $model->answer_10 = $item['answer_10'];
                    $model->right_answers = Helper::GetRightAnswers($item);
                    $model->save();
                }
            }
        }
        return true;
    }

    public static function GetTestsQuestionByTestId($id)
    {
        return self::find()->where(['pre_test_id' => $id])->asArray()->all();
    }

    public static function GetResultsByIds($ida)
    {
        return self::find()->select(['right_answers', 'id'])->where(['id' => $ida])->indexBy('id')->column();
    }

}
