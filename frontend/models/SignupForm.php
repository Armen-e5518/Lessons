<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
//    public $email;
    public $password;
    public $password_com;
    public $first_name;
    public $last_name;
    public $city;
    public $sex;
    public $region;
    public $community;
    public $school;
    public $grade;
    public $question_id;
    public $answer;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],


            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['password_com', 'required'],
            ['password_com', 'compare', 'compareAttribute' => 'password', 'message' => "Passwords don't match"],

            [['first_name', 'last_name', 'sex', 'region', 'city', 'community', 'school', 'grade', 'answer', 'question_id'], 'required'],
            [['sex', 'region', 'city', 'community', 'school', 'grade', 'question_id'], 'integer'],
            [['first_name', 'last_name','answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->sex = $this->sex;
        $user->region = $this->region;
        $user->city = $this->city;
        $user->community = $this->community;
        $user->school = $this->school;
        $user->grade = $this->grade;
        $user->current_grade = $this->grade;
        $user->answer = $this->answer;
        $user->question_id = $this->question_id;
//        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
