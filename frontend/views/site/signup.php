<?php

use  backend\components\Data;

/* @var $this yii\web\View */

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js');
$this->registerJsFile('/js/signup.js');

$this->title = '“Առողջ Ապրելակերպ” առցանց դասընթա';
$this->params['class'] = 'home-slide';
$this->params['signup'] = 'true';
?>
<section>
    <div class="container">
        <div class="propmt-access regis-login registration">
            <h4>Գրանցվել</h4>
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
                    <input type="radio" checked value="1" name="SignupForm[sex]"><span></span>Արական
                </label>
                <label class="radio-label">
                    <input type="radio" value="0" name="SignupForm[sex]"><span></span>Իգական
                </label>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'region')->dropDownList(array_merge([0 => '--'], \common\models\Region::GetAll()), ['autofocus' => true, 'class' => '', 'id' => 'region'])->label('Մարզ <em>*</em>') ?>
            </div>
            <div class="form-fld required ">
                <?= $form->field($model, 'city')->dropDownList([], ['autofocus' => true, 'class' => '', 'id' => 'city'])->label('Քաղաք <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'community')->dropDownList([], ['autofocus' => true, 'class' => '', 'id' => 'community'])->label('Համայնք <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'school')->dropDownList([], ['autofocus' => true, 'class' => '', 'id' => 'school'])->label('Դպրոց <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'grade')->dropDownList([
                    8 => 8,
                    9 => 9,
                    10 => 10,
                    11 => 11,
                ], ['autofocus' => true, 'class' => '', 'id' => 'grade'])->label('Դասարան <em>*</em>') ?>
            </div>
            <p>Դասընթացում ներառված նյութերը նախատեսված են 13-16 տարեկան աշակերտների համար</p>
            <div class="form-fld">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => ''])->label('Օգտանուն <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'question_id')->dropDownList(Data::GetQuestions(), ['autofocus' => true, 'class' => ''])->label('Հարց <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'answer')->textInput(['autofocus' => true, 'class' => ''])->label('Պատասխան <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'password')->passwordInput(['class' => ''])->label('Գաղտնաբառ <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'password_com')->passwordInput(['class' => ''])->label('Գաղտնաբառ <em>*</em>') ?>
            </div>
            <div class="signup-btn">
                <?= \yii\helpers\Html::submitButton('Հաստատել', ['class' => 'btn green-btn', 'name' => 'signup-button']) ?>
            </div>
            <?php \yii\widgets\ActiveForm::end(); ?>
        </div>

    </div>
</section>