<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VideoLesson */

$this->title = 'Create Video Lesson';
$this->params['breadcrumbs'][] = ['label' => 'Video Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-lesson-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
