<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TestsQuestion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tests Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-question-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pre_test_id',
            'question',
            'answer_1',
            'answer_2',
            'answer_3',
            'answer_4',
            'right_answers',
        ],
    ]) ?>

</div>
