<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TestsQuestion */

$this->title = 'Create Tests Question';
$this->params['breadcrumbs'][] = ['label' => 'Tests Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-question-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
