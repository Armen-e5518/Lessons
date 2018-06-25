<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DragTests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drag-tests-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text_pop')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
