<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('/admin/js/jquery.js');
$this->registerJsFile('/admin/js/choose.js');
/* @var $this yii\web\View */
/* @var $model common\models\ChooseTests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="choose-tests-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'text_pop')->textarea(['row' => 6]) ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <div class="" id="choose">
                <?php if (!empty($items)): ?>
                    <?php foreach ($items as $kay => $item) :++$kay ?>
                        <div class="item index" data-index="<?= $kay ?>">
                            <H4>Items <?= $kay ?> </H4>
                            <a href="#" class="delete" style="color: red">Delete</a>
                            <div class="row">
                                <div class="col-md-8">
                                    <lable>Title</lable>
                                    <input class="form-control" value="<?= $item['title'] ?>" type="text"
                                           name=test[index_<?= $kay ?>][title]>
                                    <lable>Man</lable>
                                    <input value="1" type="radio" <?= $item['status'] == 1 ? 'checked' : '' ?>
                                           name=test[index_<?= $kay ?>][status]>
                                    <lable>Female</lable>
                                    <input value="2" type="radio"
                                        <?= $item['status'] == 2 ? 'checked' : '' ?>
                                           name=test[index_<?= $kay ?>][status]>
                                    <lable>Both</lable>
                                    <input value="3" type="radio"
                                        <?= $item['status'] == 3 ? 'checked' : '' ?>
                                           name=test[index_<?= $kay ?>][status]>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="item index" data-index="1">
                        <H4>Items 1 </H4>
                        <div class="row">
                            <div class="col-md-8">
                                <lable>Title</lable>
                                <input class="form-control" type="text" name=test[index_1][title]>
                                <lable>Man</lable>
                                <input value="1" type="radio" name=test[index_1][status]>
                                <lable>Female</lable>
                                <input value="2" type="radio" name=test[index_1][status]>
                                <lable>Both</lable>
                                <input value="3" type="radio" name=test[index_1][status]>
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
