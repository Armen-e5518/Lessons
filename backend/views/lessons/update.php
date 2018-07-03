<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lessons */

$this->title = 'Update Lessons ';
$this->params['breadcrumbs'][] = ['label' => 'Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lessons-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'drag_lessons' => $drag_lessons,
        'choose_lessons' => $choose_lessons,
        'video_lessons' => $video_lessons,
        'all_lessons' => $all_lessons,
    ]) ?>

</div>
