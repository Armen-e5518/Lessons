<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\UserTestsStateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Tests States';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-tests-state-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-refresh"></i> Reset filter', ['index'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'user_id',
            [
                'attribute' => 'user_id',
                'format' => 'html',
                'value' => function ($model) {
                    return \common\models\User::GetAllUserById($model->user_id);
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'user_id',
                    'data' => \common\models\User::GetAllUsers(),
                    'options' => [
                        'placeholder' => 'Users...',
                    ]
                ]),
            ],
//            'u.region',
            [
                'attribute' => 'city',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->city;
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'city',
                    'data' => \common\models\City::GetAll(),
                    'options' => [
                        'placeholder' => 'City...',
                    ]
                ]),
            ],
            [
                'attribute' => 'school',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->school;
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'school',
                    'data' => \common\models\Schools::GetAllSchools(),
                    'options' => [
                        'placeholder' => 'Schools...',
                    ]
                ]),
            ],
            [
                'attribute' => 'lesson',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->GetLessonName($model->lesson_id, $model->lesson_type);
                }
            ],
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->status ? '<span style="color: #00a65a">Passed</span>' : '<span style="color: #3c8dbc">Upcoming</span>';
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'status',
                    'data' => [0 => 'Upcoming', 1 => 'Passed'],
                    'options' => [
                        'placeholder' => 'Status...',
                    ]
                ]),
            ],
            [
                'attribute' => 'grade',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->grade;
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'grade',
                    'data' => [8 => 8, 9 => 9, 10 => 10, 11 => 11],
                    'options' => [
                        'placeholder' => 'Grade...',
                    ]
                ]),
            ],
//            'lesson_id',
            'point',
//            'lesson_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


















