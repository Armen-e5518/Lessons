<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChooseTests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="choose-tests-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text_pop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([0 => 'male female', 1 => 'male female both']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
