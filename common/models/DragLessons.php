<?php

namespace common\models;

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
            [['img', 'color', 'title', ], 'string', 'max' => 255],
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
}
