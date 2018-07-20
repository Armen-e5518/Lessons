<?php

namespace common\models;

use backend\components\Helper;
use Yii;

/**
 * This is the model class for table "user_tests_state".
 *
 * @property int $id
 * @property int $user_id
 * @property int $status
 * @property int $grade
 * @property int $lesson_id
 * @property int $point
 * @property int $lesson_type
 * @property int $region
 */
class UserTestsState extends \yii\db\ActiveRecord
{

    public $school;
    public $city;

    const STATUS_PASSED = 1;
//    const STATUS_CURRENT = 1;
    const STATUS_UPCOMING = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_tests_state';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'user_id',
                'status',
                'grade',
                'lesson_id',
                'point',
                'lesson_type',
            ], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User',
            'status' => 'Status',
            'grade' => 'Grade',
            'lesson_id' => 'Lesson',
            'lesson_type' => 'lesson_type',
            'point' => 'Point',
        ];
    }

    public static function GetCurrentUserState()
    {
        return self::find()->where([
            'user_id' => Yii::$app->user->getId(),
            'grade' => Yii::$app->user->identity->current_grade
        ])->asArray()->all();
    }

    public static function GetCurrentUserStateByDone()
    {
        return self::find()->where([
            'user_id' => Yii::$app->user->getId(),
            'grade' => Yii::$app->user->identity->current_grade,
            'status' => self::STATUS_PASSED,
        ])->asArray()->all();
    }

    public static function SaveFirstUserTestState()
    {
        $LessonsGroup = LessonsGroup::CurrentId();
        $lessons = LessonGropuRel::GetAllByLessonGroupId($LessonsGroup['id']);
        foreach ($lessons as $k => $lesson) {
            $model = new self();
            $model->user_id = Yii::$app->user->getId();
            $model->status = self::STATUS_UPCOMING;
            $model->grade = Yii::$app->user->identity->current_grade;
            $model->lesson_id = $lesson['lesson_id'];
            $model->point = 0;
            $model->lesson_type = $lesson['type'];;
            $model->save();
        }
        return true;
    }

    public static function UpdateData($lesson_id, $type, $point, $l)
    {
        $model = empty($l) ? self::findOne([
            'user_id' => Yii::$app->user->getId(),
            'grade' => Yii::$app->user->identity->current_grade,
            'lesson_type' => $type,
            'lesson_id' => $lesson_id,
        ]) : self::findOne($l);
        $model->point = $point;
        $model->status = self::STATUS_PASSED;
        $model->save();
    }

    public static function GetSecondPreLesson($lesson_id)
    {
        return self::find()->where([
            'user_id' => Yii::$app->user->getId(),
            'grade' => Yii::$app->user->identity->current_grade,
            'lesson_id' => $lesson_id,
            'lesson_type' => LessonGropuRel::TYPE_PRE,
        ])->orderBy(['id' => SORT_DESC])
            ->asArray()
            ->one();
    }

    public static function CheckUserLesson($grade)
    {
        $STATUS_UPCOMING = self::findOne([
            'user_id' => Yii::$app->user->getId(),
            'grade' => $grade,
            'status' => self::STATUS_UPCOMING, //0
        ]);
        $STATUS_PASSED = self::findOne([
            'user_id' => Yii::$app->user->getId(),
            'grade' => $grade,
            'status' => self::STATUS_PASSED,  //1
        ]);
        return empty($STATUS_UPCOMING) && !empty($STATUS_PASSED);
    }

    public function GetLessonName($id, $type)
    {
        $LessonGroupRel = LessonGropuRel::GetAll();
        return Helper::GetLessonName($LessonGroupRel, $id, $type);
    }
}
