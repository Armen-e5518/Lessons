<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DragTests */

$this->title = 'Create Drag Test';
$this->params['breadcrumbs'][] = ['label' => 'Drag Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drag-tests-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
