<?php

namespace common\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "lessons_test".
 *
 * @property int $id
 * @property int $test_id
 * @property int $type
 * @property int $lesson_id
 * @property int $sorting
 */
class LessonsTest extends \yii\db\ActiveRecord
{
    const TYPE_DRAG = 1;
    const TYPE_CHOOSE = 2;
    const TYPE_VIDEO = 3;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lessons_test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_id', 'type', 'lesson_id', 'sorting'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test_id' => 'Test ID',
            'type' => 'Type',
            'lesson_id' => 'lesson_id',
            'sorting' => 'sorting',
        ];
    }

    public static function SaveLessonsTest($id, $data)
    {
        self::deleteAll(['lesson_id' => $id]);
        if (!empty($id && !empty($data['list']))) {
            if (!empty($data['list']['drag']['ids'])) {
                foreach ($data['list']['drag']['ids'] as $k => $item) {
                    $model = new self();
                    $model->test_id = $item;
                    $model->lesson_id = $id;
                    $model->type = self::TYPE_DRAG;
                    $model->sorting = $k;
                    $model->save();
                }
            }
            if (!empty($data['list']['choose']['ids'])) {
                foreach ($data['list']['choose']['ids'] as $k => $item) {
                    $model = new self();
                    $model->test_id = $item;
                    $model->lesson_id = $id;
                    $model->type = self::TYPE_CHOOSE;
                    $model->sorting = $k;
                    $model->save();
                }
            }
            if (!empty($data['list']['video']['ids'])) {
                foreach ($data['list']['video']['ids'] as $k => $item) {
                    $model = new self();
                    $model->test_id = $item;
                    $model->lesson_id = $id;
                    $model->type = self::TYPE_VIDEO;
                    $model->sorting = $k;
                    $model->save();
                }
            }
        }
        return true;
    }

    public static function GetAllById($lesson_id)
    {
        $query1 = new Query();
        $query2 = new Query();
        $query3 = new Query();
        $query4 = new Query();
        $query5 = new Query();

        $query1->select([
            'lt.sorting',
            'lt.type',
            'lt.test_id',
            't.title',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(DragTests::tableName() . ' t', 't.id = lt.test_id')
            ->where(['lt.type' => self::TYPE_DRAG])
            ->andWhere(['lt.lesson_id' => $lesson_id]);
        $query2->select([
            'lt.sorting',
            'lt.type',
            'lt.test_id',
            't.title',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(ChooseTests::tableName() . ' t', 't.id = lt.test_id')
            ->where(['lt.type' => self::TYPE_CHOOSE])
            ->andWhere(['lt.lesson_id' => $lesson_id]);
        $query3->select([
            'lt.sorting',
            'lt.type',
            'lt.test_id',
            't.title',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(VideoLesson::tableName() . ' t', 't.id = lt.test_id')
            ->where(['lt.type' => self::TYPE_VIDEO])
            ->andWhere(['lt.lesson_id' => $lesson_id]);
        $query5 = $query1->union($query2, true)
            ->union($query3, true);
        return $query4->select(['*'])
            ->from(['t' => $query5])
            ->orderBy(['sorting' => SORT_ASC])
            ->all();
    }

    public static function GetFirstTest($lesson_id)
    {
        return self::find()->where(['lesson_id' => $lesson_id])->orderBy(['sorting' => SORT_ASC])->asArray()->one();
    }

    public static function GetFirstTestByType($lesson_id, $type)
    {
        return self::find()->where(['lesson_id' => $lesson_id, 'type' => $type])->orderBy(['sorting' => SORT_ASC])->asArray()->one();
    }

    public static function GetTestsByLessonId($lesson_id)
    {
        return self::find()->where(['lesson_id' => $lesson_id])->orderBy(['sorting' => SORT_ASC])->asArray()->all();
    }

    public static function GetTestsByLessonIdByTestId($lesson_id, $test_id, $type)
    {
        return self::find()->where(['lesson_id' => $lesson_id, 'test_id' => $test_id, 'type' => $type])->asArray()->one();
    }
}
