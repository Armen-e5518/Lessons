<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lessons */

$this->title = 'Create Lesson';
$this->params['breadcrumbs'][] = ['label' => 'Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lessons-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'drag_lessons' => $drag_lessons,
        'choose_lessons' => $choose_lessons,
        'video_lessons' => $video_lessons,
    ]) ?>

</div>
