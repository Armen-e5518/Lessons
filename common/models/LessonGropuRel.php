<?php

namespace common\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "lesson_gropu_rel".
 *
 * @property int $id
 * @property int $lesson_group_id
 * @property int $lesson_id
 * @property int $type
 * @property int $sorting
 */
class LessonGropuRel extends \yii\db\ActiveRecord
{

    const TYPE_PRE = 1;
    const TYPE_GLOB = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lesson_gropu_rel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_group_id', 'lesson_id', 'type', 'sorting'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_group_id' => 'Lesson Group ID',
            'lesson_id' => 'Lesson ID',
            'type' => 'Type',
            'sorting' => 'sorting',
        ];
    }

    public static function SaveLessons($id, $data)
    {
        self::deleteAll(['lesson_group_id' => $id]);
        if (!empty($id && !empty($data['list']))) {
            if (!empty($data['list']['pre']['ids'])) {
                foreach ($data['list']['pre']['ids'] as $k => $item) {
                    $model = new self();
                    $model->lesson_id = $item;
                    $model->lesson_group_id = $id;
                    $model->type = self::TYPE_PRE;
                    $model->sorting = $k;
                    $model->save();
                }
            }
            if (!empty($data['list']['glob']['ids'])) {
                foreach ($data['list']['glob']['ids'] as $k => $item) {
                    $model = new self();
                    $model->lesson_id = $item;
                    $model->lesson_group_id = $id;
                    $model->type = self::TYPE_GLOB;
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

        $query1->select([
            'lt.sorting',
            'lt.type',
            'lt.lesson_id',
            't.title',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(PreTests::tableName() . ' t', 't.id = lt.lesson_id')
            ->where(['lt.type' => self::TYPE_PRE])
            ->andWhere(['lt.lesson_group_id' => $lesson_id]);
        $query2->select([
            'lt.sorting',
            'lt.type',
            'lt.lesson_id',
            't.title',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(Lessons::tableName() . ' t', 't.id = lt.lesson_id')
            ->where(['lt.type' => self::TYPE_GLOB])
            ->andWhere(['lt.lesson_group_id' => $lesson_id]);

        $query1->union($query2, true);

        return $query3->select(['*'])
            ->from(['t' => $query1])
            ->orderBy(['sorting' => SORT_ASC])
            ->all();
    }

}
