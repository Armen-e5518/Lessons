<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserTestsState */

$this->title = 'Create User Tests State';
$this->params['breadcrumbs'][] = ['label' => 'User Tests States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-tests-state-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
