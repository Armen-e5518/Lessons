<?php

/* @var $this yii\web\View */

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->title = '“Առողջ Ապրելակերպ” առցանց դասընթա';
$this->params['class'] = 'next-slide';
$this->params['slider'] = 'true';
$this->params['slider_1'] = '/site/index';
$this->params['slider_2'] = '#';
?>

<section>
    <div class="container">
        <div class="propmt-access">
            <div class="access-links">
                <a href="#"><i class="fas fa-check-circle"></i>Գրանցվիր</a>
                <a href="#"><i class="fas fa-check-circle"></i>Մասնակցիր</a>
                <a href="#"><i class="fas fa-check-circle"></i>Ստացիր վկայական</a>
            </div>
            <a href="/site/signup" class="btn green-btn"><i class="fas fa-user-edit"></i>գրանցվել</a>
            <a href="/site/login" class="btn blue-btn"><i class="fas fa-user-lock"></i>մուտք</a>
        </div>
    </div>
</section>