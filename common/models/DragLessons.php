<?php

namespace common\models;

use backend\components\File;
use Yii;

/**
 * This is the model class for table "drag_lessons".
 *
 * @property int $id
 * @property int $drag_test_id
 * @property string $img
 * @property string $color
 * @property string $title
 * @property string $text
 * @property int $status
 */
class DragLessons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drag_lessons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drag_test_id', 'status'], 'integer'],
            [['text'], 'string'],
            [['img', 'color', 'title',], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'drag_test_id' => 'Drag Test ID',
            'img' => 'Img',
            'color' => 'Color',
            'title' => 'Title',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }

    public static function SaveLesson($id, $lessons, $file)
    {
        self::deleteAll(['drag_test_id' => $id]);
        if (!empty($lessons['test'])) {
            foreach ($lessons['test'] as $k => $item) {
                if (!empty($item['title'])) {
                    $file_n = File::Uploads($file, $k);
                    $img = empty($item['img']) ? null : $item['img'];
                    $model = new self();
                    $model->color = $item['color'];
                    $model->title = $item['title'];
                    $model->text = $item['text'];
                    $model->status = empty($item['status']) ? 0 : 1;
                    $model->drag_test_id = $id;
                    $model->img = $file_n ? $file_n : $img;
                    if (!$model->save()) {
                        print_r($model->getErrors());
                        exit;
                    };
                }
            }
        }
        return true;
    }

    public static function GetDragLessonsById($id)
    {
        return self::find()->where(['drag_test_id' => $id])->asArray()->all();
    }
}
