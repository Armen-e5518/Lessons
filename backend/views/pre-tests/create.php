<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PreTests */

$this->title = 'Create Primary Test';
$this->params['breadcrumbs'][] = ['label' => 'Primary Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pre-tests-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
