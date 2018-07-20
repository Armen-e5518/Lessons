<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->title = '“Առողջ Ապրելակերպ” առցանց դասընթա';
$this->params['class'] = 'home-slide';
$this->params['login'] = 'true';
?>

<section>
    <div class="container">
        <div class="propmt-access regis-login">
            <h4>Մուտք Գործել</h4>
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'fieldConfig' => ['options' => ['tag' => false]]]); ?>
            <div class="form-fld">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => ''])->label('Օգտանուն') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'password')->passwordInput(['class' => ''])->label('Գաղտնաբառ') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'rememberMe')->checkbox()->label('Հիշել') ?>
                <a class="forgote" href="/site/request-password-reset">Մոռացել եմ․․․ </a>
            </div>
            <?= Html::submitButton('Մուտք', ['class' => 'btn blue-btn', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>

