<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LessonsGroup */

$this->title = 'Create Lessons Group';
$this->params['breadcrumbs'][] = ['label' => 'Lessons Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lessons-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'glob_lessons' => $glob_lessons,
        'pre_lessons' => $pre_lessons,
    ]) ?>

</div>
