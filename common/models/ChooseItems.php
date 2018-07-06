<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "choose_items".
 *
 * @property int $id
 * @property int $choose_id
 * @property string $title
 * @property int $status
 */
class ChooseItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choose_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'choose_id'], 'integer'],
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
            'status' => 'Status',
            'choose_id' => 'choose_id',
        ];
    }

    public static function SaveItems($id, $items)
    {
        self::deleteAll(['choose_id' => $id]);
        if (!empty($id) && !empty($items['test'])) {
            foreach ($items['test'] as $item) {
                if (!empty($item['title'])) {
                    $model = new self();
                    $model->choose_id = $id;
                    $model->status = empty($item['status']) ? null : $item['status'];
                    $model->title = $item['title'];
                    if (!$model->save()) {
                        print_r($model->getErrors());
                        exit;
                    };
                }
            }
        }
        return true;
    }

    public static function GetItemsById($id)
    {
        return self::find()->where(['choose_id' => $id])->asArray()->all();
    }


}


