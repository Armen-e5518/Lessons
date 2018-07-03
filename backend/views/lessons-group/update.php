<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LessonsGroup */

$this->title = 'Update Lessons Group';
$this->params['breadcrumbs'][] = ['label' => 'Lessons Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lessons-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'all_lessons' => $all_lessons,
        'glob_lessons' => $glob_lessons,
        'pre_lessons' => $pre_lessons,
    ]) ?>

</div>
