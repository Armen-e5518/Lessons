<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChooseTests */

$this->title = 'Create Choose Tests';
$this->params['breadcrumbs'][] = ['label' => 'Choose Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-tests-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
