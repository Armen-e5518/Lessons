<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VideoLesson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-lesson-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'pop_text')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_1')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?php if(!empty($model->video_url)):?>
                <object width="200"
                        data="https://www.youtube.com/embed/<?=\backend\components\Helper::GetVideoId($model->video_url)?>">
                </object>
            <?php endif; ?>
            <?= $form->field($model, 'video_url')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_2')->textarea(['rows' => 6]) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
