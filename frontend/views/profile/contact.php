<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['contact'] = 'true';
?>

<section class="breadcrumb">
    <div class="container align-text">
        <span class="page-title"><strong>Կապ մեզ հետ</strong></span>
    </div>
</section>
<section class="contact-section propmt-access">
    <div class="container">
        <div class="contact-area d-flex">
            <div class="contact-l">
                <div id="map" class="map">
                </div>
                <ul class="address-list">
                    <li class="icon-map"><i class="fas fa-map-marker-alt"></i> Yerevan, 60 Griboyedov St.</li>
                    <li class="icon-phone"><i class="fas fa-phone-square"></i> <a href="tel:++374 10 123456"> +374 10
                            123456</a>
                    </li>
                    <li class="icon-mail">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@xxx.am">info@xxx.am</a>
                    </li>
                </ul>
            </div>
            <div class="contact-r">
                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'form']); ?>
                <div class="form-top">
                    <div class="form-fld">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => ''])->label('Անուն') ?>
                    </div>
                    <div class="form-fld">
                        <?= $form->field($model, 'email')->textInput(['class' => ''])->label('Էլ․ հասցե') ?>
                    </div>
                </div>
                <div class="form-fld">
                    <?= $form->field($model, 'subject')->textInput(['class' => ''])->label('Թեմա') ?>
                </div>
                <div class="form-fld">
                    <?= $form->field($model, 'body')->textarea(['rows' => 6, 'class' => ''])->label('Հաղորդագրություն') ?>
                </div>
                <?= Html::submitButton('Հաստատել', ['class' => 'btn blue-btn', 'name' => 'contact-button']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            scrollwheel: false,
            center: {lat: 40.213613, lng: 44.515411}

        });

        var image = '/main/assets/images/location.png';
        var beachMarker = new google.maps.Marker({
            position: {lat: 40.213613, lng: 44.515411},
            map: map,
            title: 'Առողջ Ապրելակերպ',
            icon: image
        });
    }
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAFhw6VwFAUnsz6HyBT5A7iy300H512c1o&libraries=places,geometry&callback=initMap"
        type="text/javascript"></script>
