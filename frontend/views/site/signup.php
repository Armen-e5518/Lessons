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
        <div class="propmt-access regis-login">
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
                <label class="radio-label"><input type="radio" value="1"
                                                  name="SignupForm[sex]"><span></span>Արական</label>
                <label class="radio-label"><input type="radio" value="0"
                                                  name="SignupForm[sex]"><span></span>Իգական</label>
            </div>
            <div class="form-fld">
                <label>Մարզ <em>*</em></label>
                <select aria-invalid="true" aria-required="true" name="SignupForm[region]" id="region">
                    <option value="">--</option>
                    <?php foreach (Data::GetRegion() as $k => $region): ?>
                        <option value="<?= $k ?>"><?= $region ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-fld">
                <label>Քաղաք <em>*</em></label>
                <select aria-invalid="true" aria-required="true" name="SignupForm[city]" id="city">
                    <option value="">--</option>
                </select>
            </div>
            <div class="form-fld">
                <label>Համայնք <em>*</em></label>
                <select aria-invalid="true" aria-required="true" name="SignupForm[community]" id="community">
                    <option value="">--</option>
                </select>
            </div>
            <p>Դասընթացում ներառված նյութերը նախատեսված են 13-16 տարեկան աշակերտների համար</p>
            <div class="form-fld">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => ''])->label('Օգտանուն <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'password')->passwordInput(['class' => ''])->label('Գաղտնաբառ <em>*</em>') ?>
            </div>
            <div class="form-fld">
                <?= $form->field($model, 'password_com')->passwordInput(['class' => ''])->label('Գաղտնաբառ <em>*</em>') ?>
            </div>

            <?= \yii\helpers\Html::submitButton('Հաստատել', ['class' => 'btn green-btn', 'name' => 'signup-button']) ?>
            <?php \yii\widgets\ActiveForm::end(); ?>
        </div>

    </div>
</section>