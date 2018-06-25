<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\TestsQuestiontsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tests-question-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pre_test_id') ?>

    <?= $form->field($model, 'question') ?>

    <?= $form->field($model, 'answer_1') ?>

    <?= $form->field($model, 'answer_2') ?>

    <?php // echo $form->field($model, 'answer_3') ?>

    <?php // echo $form->field($model, 'answer_4') ?>

    <?php // echo $form->field($model, 'right_answers') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
