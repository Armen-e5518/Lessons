<?php

namespace common\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "lessons_group".
 *
 * @property int $id
 * @property string $title
 * @property int $grade
 */
class LessonsGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lessons_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'grade'], 'required'],
            [['grade'], 'integer'],
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
            'title' => 'Title',
            'grade' => 'Grade',
        ];
    }


    public static function CurrentId()
    {
        return self::findOne(['grade' => Yii::$app->user->identity->current_grade]);
    }

    public static function GetAllByCurrentGrade()
    {
        $q = new Query();
        return $q->select([
            'l.title as title',
            'l.id as id',
        ])
            ->from(self::tableName() . ' lg')
            ->leftJoin(LessonGropuRel::tableName() . ' lgr', 'lgr.lesson_group_id = lg.id')
            ->leftJoin(Lessons::tableName() . ' l', 'l.id = lgr.lesson_id')
            ->where(['lg.grade' => Yii::$app->user->identity->current_grade])
            ->all();
    }
}
