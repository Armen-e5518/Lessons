<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DragTests */
/* @var $form yii\widgets\ActiveForm */

$this->registerCssFile('/admin/css/colorpicker.css');
$this->registerJsFile('/admin/js/jquery.js');
$this->registerJsFile('/admin/js/colorpicker.js');
$this->registerJsFile('/admin/js/color.js');
$this->registerJsFile('/admin/js/drag_test.js');
?>

<div class="drag-tests-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'text_pop')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <div class="row" id="drag">
                <?php if (!empty($items)): ?>
                    <?php foreach ($items as $kay=> $item) : ?>
                        <div class="item">
                            <H4>Items 1 </H4>
                            <div class="row">
                                <div class="col-md-6">
                                    <lable>Icon</lable>
                                    <input class="form-control" type="file" name=test[index_1][img]>
                                    <lable>Color</lable>
                                    <input class="form-control"   type="text" name=test[index_1][color]>
                                    <lable>Title</lable>
                                    <input class="form-control" type="text" name=test[index_1][title]>
                                </div>
                                <div class="col-md-6">
                                    <lable>Text</lable>
                                    <input class="form-control" type="text" name=test[index_1][text]>
                                    <lable>Right</lable>
                                    <input class="form-control" type="text" name=test[index_1][status]>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else:; ?>
                    <div class="item">
                        <H4>Items 1 </H4>
                        <div class="row">
                            <div class="col-md-6">
                                <lable>Icon</lable>
                                <input class="form-control" type="file" name=test[index_1][img]>
                                <lable>Color</lable>
                                <input class="form-control color" id="color" type="text" name=test[index_1][color]>
                                <lable>Title</lable>
                                <input class="form-control" type="text" name=test[index_1][title]>
                            </div>
                            <div class="col-md-6">
                                <lable>Text</lable>
                                <input class="form-control" type="text" name=test[index_1][text]>
                                <lable>Right</lable>
                                <input class="form-control" type="text" name=test[index_1][status]>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <br>
            <button type="button" id="add_new_form" class="btn btn-success">Add new item</button>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
