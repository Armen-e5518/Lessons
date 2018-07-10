<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Config */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="config-form">

    <?php $form = ActiveForm::begin(); ?>

    <H1>Avatar</H1>
    <?= $form->field($model, 'name')->hiddenInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-4">
            <img src="/main/assets/images/users/avatars/1.png" width="200px" alt="">
            <?= $form->field($model, 'value')->radio(['label' => '', 'value' => 1, 'uncheck' => null]) ?>
        </div>
        <div class="col-md-4">
            <img src="/main/assets/images/users/avatars/2.png" width="200px" alt="">
            <?= $form->field($model, 'value')->radio(['label' => '', 'value' => 2, 'uncheck' => null]) ?>
        </div>
        <div class="col-md-4">
            <img src="/main/assets/images/users/avatars/3.png" width="200px" alt="">
            <?= $form->field($model, 'value')->radio(['label' => '', 'value' => 3, 'uncheck' => null]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="/main/assets/images/users/avatars/4.png" width="200px" alt="">
            <?= $form->field($model, 'value')->radio(['label' => '', 'value' => 4, 'uncheck' => null]) ?>
        </div>
        <div class="col-md-4">
            <img src="/main/assets/images/users/avatars/5.png" width="200px" alt="">
            <?= $form->field($model, 'value')->radio(['label' => '', 'value' => 5, 'uncheck' => null]) ?>
        </div>
        <div class="col-md-4">
            <img src="/main/assets/images/users/avatars/6.png" width="200px" alt="">
            <?= $form->field($model, 'value')->radio(['label' => '', 'value' => 6, 'uncheck' => null]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
