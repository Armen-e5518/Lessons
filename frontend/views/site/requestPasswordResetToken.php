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
            <h4>Փոխել Գաղտնաբառը</h4>
            <?php $form = ActiveForm::begin(['id' => 'login-form',  'validateOnBlur' => false, 'fieldConfig' => ['options' => ['tag' => false]]]); ?>
            <div class="form-fld">
                <?= $form->field($model, 'username')->input(['class' => ''])->label('Օգտանուն') ?>
            </div>
            <?= Html::submitButton('Առաջ', ['class' => 'btn blue-btn', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>