<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>

        <?= Html::a('<i class="glyphicon glyphicon-refresh"></i> Reset filter' , ['index'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            //'email:email',
//            'status',
            //'created_at',
            //'updated_at',
            'first_name',
            'last_name',
            [
                'attribute' => 'sex',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->sex ? 'Man' : 'Female';
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'sex',
                    'data' => [0 => 'Man', 1 => 'Female'],
                    'options' => [
                        'placeholder' => 'Sex...',
                    ]
                ]),
            ],
            //'region',
            //'city',
            //'community',
            //'school',
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
            [
                'attribute' => 'school',
                'format' => 'html',
                'value' => function ($model) {
                    return \common\models\Schools::GetAllSchoolById($model->school);
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'school',
                    'data' => \common\models\Schools::GetAllSchools(),
                    'options' => [
                        'placeholder' => 'School...',
                    ]
                ]),
            ],
            //'question_id',
            //'answer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
