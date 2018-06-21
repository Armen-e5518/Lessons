<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PreTests */

$this->title = 'Create Pre Tests';
$this->params['breadcrumbs'][] = ['label' => 'Pre Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pre-tests-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
