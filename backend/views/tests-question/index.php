<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TestsQuestiontsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests Question';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-question-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Test Question', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pre_test_id',
            'question',
//            'answer_1',
//            'answer_2',
            //'answer_3',
            //'answer_4',
            //'right_answers',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
