<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PreTestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Primary Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pre-tests-index">
    <p>
        <?= Html::a('Create Primary Test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'pop_text:ntext',
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
