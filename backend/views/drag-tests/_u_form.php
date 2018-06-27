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

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'text_pop')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <div class="" id="drag">
                <?php if (!empty($lessons)): ?>
                    <?php foreach ($lessons as $kay => $item) : ?>
                        <div class="item">
                            <H4>Items 1 </H4>
                            <a href="#" class="delete" style="color: red">Delete</a>
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if (!empty($item['img'])): ?>
                                        <img src="/admin/uploads/<?= $item['img'] ?>" width="150" alt="">
                                    <?php endif; ?>
                                    <lable>Icon</lable>
                                    <input class="form-control" value="<?= $item['img'] ?>" type="hidden"
                                           name=test[index_<?= $kay ?>][img]>
                                    <input class="form-control" type="file" name=test[index_<?= $kay ?>][img]>
                                    <lable>Color</lable>
                                    <input class="form-control color"
                                           style="<?= !empty($item['color']) ? 'background-color: ' . $item['color'] . ';' : '' ?>"
                                           autocomplete="off" value="<?= $item['color'] ?>" type="text"
                                           name=test[index_<?= $kay ?>][color]>
                                </div>
                                <div class="col-md-6">
                                    <lable>Title</lable>
                                    <input class="form-control" value="<?= $item['title'] ?>" type="text"
                                           name=test[index_<?= $kay ?>][title]>
                                    <lable>Text</lable>
                                    <input class="form-control" value="<?= $item['text'] ?>" type="text"
                                           name=test[index_<?= $kay ?>][text]>
                                    <lable>Right</lable>
                                    <input class="" type="checkbox" <?= !empty($item['status']) ? 'checked' : '' ?>
                                           name=test[index_<?= $kay ?>][status]>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="item index" data-index="1">
                        <H4>Items 1 </H4>
                        <div class="row">
                            <div class="col-md-6">
                                <lable>Icon</lable>
                                <input class="form-control" type="file" name=test[index_1][img]>
                                <lable>Color</lable>
                                <input class="form-control color" autocomplete="off" type="text"
                                       name=test[index_1][color]>
                            </div>
                            <div class="col-md-6">
                                <lable>Title</lable>
                                <input class="form-control" type="text" name=test[index_1][title]>
                                <lable>Text</lable>
                                <input class="form-control" type="text" name=test[index_1][text]>
                                <lable>Right</lable>
                                <input class="" type="checkbox" name=test[index_1][status]>
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
