<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserTestsState */

$this->title = 'Update User Tests State: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Tests States', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-tests-state-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
