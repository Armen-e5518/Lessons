<?php

use yii\helpers\Html;
use  backend\components\Data;

/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js');
$this->registerJsFile('/js/signup.js');

$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['profile'] = 'true';
?>
<section class="breadcrumb">
    <div class="container">
        <span class="previous-step"><a href="#"><i class="fas fa-arrow-left"></i><span class="previous-step-txt">վերադառնալ</span></a></span>
        <span class="page-title"><strong>Կարգավորումներ</strong></span>
        <div class="w-135"></div>
    </div>
</section>
<section class="edit-profile-info">
    <div class="container">
        <div class="propmt-access regis-login registration">
            <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'form-signup']); ?>
            <div class="form-fld">
                <?= $form->field($model, 'first_name')->textInput(['autofocus' => true, 'class' => ''])->label('Անուն <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'last_name')->textInput(['autofocus' => true, 'class' => ''])->label('Ազգանուն <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <label>Սեռ <em>*</em></label>
                <label class="radio-label">
                    <input type="radio" checked value="1" name="User[sex]"><span></span>Արական
                </label>
                <label class="radio-label">
                    <input type="radio" value="0" name="User[sex]"><span></span>Իգական
                </label>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'region')->dropDownList(Data::GetRegion(), ['autofocus' => true, 'class' => '', 'id' => 'region'])->label('Մարզ <em>*</em>') ?>
            </div>
            <div class="form-fld required ">
                <?= $form->field($model, 'city')->dropDownList(Data::GetCityByRegion()[$model->region], ['autofocus' => true, 'class' => '', 'id' => 'city'])->label('Քաղաք <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'community')->dropDownList(Data::GetCommunity()[$model->region][$model->city], ['autofocus' => true, 'class' => '', 'id' => 'community'])->label('Համայնք <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'school')->dropDownList(Data::GetSchool()[$model->region][$model->city][$model->community], ['autofocus' => true, 'class' => '', 'id' => 'school'])->label('Դպրոց <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'grade')->dropDownList([
                    8 => 8,
                    9 => 9,
                    10 => 10,
                    11 => 11,
                    12 => 12,
                ], ['autofocus' => true, 'class' => '', 'id' => 'grade'])->label('Դասարան <em>*</em>') ?>
            </div>
            <div class="signup-btn">
                <?= \yii\helpers\Html::submitButton('Հաստատել', ['class' => 'btn green-btn', 'name' => 'signup-button']) ?>
            </div>
            <?php \yii\widgets\ActiveForm::end(); ?>

        </div>
    </div>
</section>