<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{
    public $username;
    public $question_id;
    public $answer;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['question_id', 'trim'],
            ['answer', 'trim'],
            ['question_id', 'required'],
            ['answer', 'required'],
            ['username', 'required'],
        ];
    }

    public function CheckUser()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'username' => $this->username,
        ]);

        if (!$user) {
            return false;
        }

        if ($user['answer'] == $this->answer) {
            return true;
        }
        return false;
    }
}
