<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DragTests */

$this->title = 'Update Drag Tests ';
$this->params['breadcrumbs'][] = ['label' => 'Drag Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drag-tests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_u_form', [
        'model' => $model,
        'lessons' => $lessons,
    ]) ?>

</div>
