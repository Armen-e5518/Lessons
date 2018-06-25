<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TestsQuestion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tests-question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pre_test_id')->textInput() ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_answers')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
