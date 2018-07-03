<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PreTests */

$this->title = 'Update Primary Test ';
$this->params['breadcrumbs'][] = ['label' => 'Pre Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pre-tests-update">

    <?= $this->render('_u_form', [
        'model' => $model,
        'questions' => $questions,
    ]) ?>

</div>
