<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video_lesson".
 *
 * @property int $id
 * @property string $title
 * @property string $pop_text
 * @property string $text_1
 * @property string $video_url
 * @property string $text_2
 */
class VideoLesson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video_lesson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_1', 'text_2'], 'string'],
            [['title', 'pop_text', 'video_url'], 'string', 'max' => 255],
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
            'pop_text' => 'Pop Text',
            'text_1' => 'Text 1',
            'video_url' => 'Video Url ex. (https://www.youtube.com/watch?v=uwTEi7tDEfQ)',
            'text_2' => 'Text 2',
        ];
    }
    public static function GetAll()
    {
        return self::find()->asArray()->all();
    }


}
