<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('/admin/js/jquery.js');
$this->registerJsFile('/admin/js/lessons.js');
/* @var $this yii\web\View */
/* @var $model common\models\Lessons */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lessons-form">
    <div class="row">

        <div class="col-md-4">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'grade')->dropDownList([
                8 => 8,
                9 => 9,
                10 => 10,
                11 => 11,
                12 => 12,
            ]) ?>
            <div class="m_lessons">
                <div class=" all_lessons">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Lessons</h3>
                        </div>
                        <div class="box-body">
                            <?php if (!empty($all_lessons)): ?>
                                <?php foreach ($all_lessons as $lesson):
                                    $type = $lesson['type'] == 1 ? 'drag' : '';
                                    $type = $lesson['type'] == 2 ? 'choose' : $type;
                                    $type = $lesson['type'] == 3 ? 'video' : $type ?>
                                    <div class="item <?= $type ?>" data-type="<?= $lesson['type'] ?>" data-sorting="<?=$lesson['sorting']?>">
                                        <input type="hidden" value="<?= $lesson['test_id'] ?>"
                                               name="list[<?= $type ?>][ids][<?= $lesson['sorting'] ?>]">
                                        <span class="title"><?= $lesson['title'] ?></span>
                                        <i class="fa fa-fw fa-close"></i>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-8">
            <div class="row m_lessons">
                <div class="col-md-4 l_lesson">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Drag lessons</h3>
                        </div>
                        <div class="box-body">
                            <?php if (!empty($drag_lessons)): ?>
                                <?php foreach ($drag_lessons as $lesson): ?>
                                    <div class="item drag">
                                        <input type="hidden" value="<?= $lesson['id'] ?>" name="list[drag][ids]">
                                        <span class="title"><?= $lesson['title'] ?></span>
                                        <i class="fa fa-fw fa-close" title="Delete"></i>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 l_lesson">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Choose lessons</h3>
                        </div>
                        <div class="box-body">
                            <?php if (!empty($choose_lessons)): ?>
                                <?php foreach ($choose_lessons as $lesson): ?>
                                    <div class="item choose">
                                        <input type="hidden" value="<?= $lesson['id'] ?>" name="list[choose][ids]">
                                        <span class="title"><?= $lesson['title'] ?></span>
                                        <i class="fa fa-fw fa-close" title="Delete"></i>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 l_lesson">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Video lessons</h3>
                        </div>
                        <div class="box-body">
                            <?php if (!empty($video_lessons)): ?>
                                <?php foreach ($video_lessons as $lesson): ?>
                                    <div class="item video">
                                        <input type="hidden" value="<?= $lesson['id'] ?>" name="list[video][ids]">
                                        <span class="title"><?= $lesson['title'] ?></span>
                                        <i class="fa fa-fw fa-close" title="Delete"></i>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
