<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Schools;
/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js');
$this->registerJsFile('/js/signup.js');
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'sex')->dropDownList([0 => 'Female',1=> 'Man']) ?>
            <?= $form->field($model, 'grade')->textInput() ?>
            <?= $form->field($model, 'current_grade')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'region')->dropDownList(array_merge([0 => '--'], \common\models\Region::GetAll()), ['autofocus' => true,  'id' => 'region']) ?>
            <?= $form->field($model, 'city')->dropDownList(Schools::GetCityByRegion($model->region), ['autofocus' => true, 'id' => 'city']) ?>
            <?= $form->field($model, 'community')->dropDownList(Schools::GetCommunity($model->region, $model->city), ['autofocus' => true, 'id' => 'community'])?>
            <?= $form->field($model, 'school')->dropDownList(Schools::GetSchool($model->region, $model->city, $model->community), ['autofocus' => true, 'id' => 'school']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
