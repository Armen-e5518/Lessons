<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChooseTests */

$this->title = 'Update Choose Tests: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Choose Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="choose-tests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_u', [
        'model' => $model,
        'items' => $items,
    ]) ?>

</div>
