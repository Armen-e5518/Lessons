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
            'lt.id',
            'lt.sorting',
            'lt.type',
            'lt.lesson_id',
            't.title',
            'u.lesson_type',
            'u.point',
            'u.status as u_status',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(PreTests::tableName() . ' t', 't.id = lt.lesson_id')
            ->leftJoin(UserTestsState::tableName() . ' u', 'u.lesson_id = lt.lesson_id 
                                                        AND u.user_id = ' . Yii::$app->user->getId() .
                ' AND u.lesson_type = ' . self::TYPE_PRE .
                ' AND u.grade = ' . Yii::$app->user->identity->current_grade
            )
            ->where(['lt.type' => self::TYPE_PRE])
            ->andWhere(['lt.lesson_group_id' => $lesson_id]);
        $query2->select([
            'lt.id',
            'lt.sorting',
            'lt.type',
            'lt.lesson_id',
            't.title',
            'u.lesson_type',
            'u.point',
            'u.status as u_status',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(Lessons::tableName() . ' t', 't.id = lt.lesson_id')
            ->leftJoin(UserTestsState::tableName() . ' u', 'u.lesson_id = lt.lesson_id 
                                                        AND u.user_id = ' . Yii::$app->user->getId() .
                                                        ' AND u.lesson_type = ' . self::TYPE_GLOB .
                                                        ' AND u.grade = ' . Yii::$app->user->identity->current_grade
            )
            ->where(['lt.type' => self::TYPE_GLOB])
            ->andWhere(['lt.lesson_group_id' => $lesson_id]);

        $query1->union($query2, true);

        return $query3->select(['*'])
            ->from(['t' => $query1])
            ->groupBy('id')
            ->orderBy(['sorting' => SORT_ASC])
            ->all();
    }

    public static function GetAll()
    {
        $query1 = new Query();
        $query2 = new Query();
        $query3 = new Query();

        $query1->select([
            'lt.id',
            'lt.type',
            'lt.lesson_id',
            't.title',
            'u.lesson_type',

        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(PreTests::tableName() . ' t', 't.id = lt.lesson_id')
            ->leftJoin(UserTestsState::tableName() . ' u', 'u.lesson_id = lt.lesson_id  AND u.lesson_type = ' . self::TYPE_PRE)
            ->where(['lt.type' => self::TYPE_PRE]);
        $query2->select([
            'lt.id',
            'lt.type',
            'lt.lesson_id',
            't.title',
            'u.lesson_type',
        ])
            ->from(self::tableName() . ' lt')
            ->leftJoin(Lessons::tableName() . ' t', 't.id = lt.lesson_id')
            ->leftJoin(UserTestsState::tableName() . ' u', 'u.lesson_id = lt.lesson_id AND u.lesson_type = ' . self::TYPE_GLOB)
            ->where(['lt.type' => self::TYPE_GLOB]);

        $query1->union($query2, true);

        return $query3->select(['*'])
            ->from(['t' => $query1])
            ->groupBy('id')
            ->all();
    }

    public static function GetAllByLessonGroupId($id)
    {
        return self::find()->where(['lesson_group_id' => $id])->asArray()->orderBy('sorting')->all();
    }


}
