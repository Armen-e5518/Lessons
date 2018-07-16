<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['profile'] = 'true';
?>
<section class="breadcrumb">
    <div class="container">
        <span class="previous-step"><a href="#"><i class="fas fa-arrow-left"></i><span class="previous-step-txt">վերադառնալ</span></a></span>
        <span class="page-title"><strong>Սերտիֆիկատներ</strong></span>
        <div class="w-135"></div>
    </div>
</section>
<section class="courses">
    <a href="#" class="user-avatar-small"><img src="/main/assets/images/users/user-avatar-small.png" alt="Կարինե"
                                               title="Կարինե"></a>
    <div class="container">
        <div class="choose-certificate d-flex">
            <a href="#" class="certificate-item active-certificate">
                <img src="/main/assets/images/cert-1.jpg">
                <strong>
                    8-րդ դասարան
                </strong>
            </a>
            <a href="#" class="certificate-item inactive-certificate">
                <img src="/main/assets/images/cert-2.jpg">
                <strong>
                    9-րդ դասարան
                </strong>

            </a>
            <a href="#" class="certificate-item inactive-certificate">
                <img src="/main/assets/images/cert-1.jpg">
                <strong>
                    10-րդ դասարան
                </strong>

            </a>
            <a href="#" class="certificate-item inactive-certificate">
                <img src="/main/assets/images/cert-2.jpg">
                <strong>
                    11-րդ դասարան
                </strong>
            </a>

        </div>
    </div>
</section>