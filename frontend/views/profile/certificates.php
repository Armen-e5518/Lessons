<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['certificates'] = 'true';
?>
<section class="breadcrumb">
    <div class="container">
        <span class="previous-step"><a href="#"><i class="fas fa-arrow-left"></i><span class="previous-step-txt">վերադառնալ</span></a></span>
        <span class="page-title"><strong>Իմ սերտիֆիկատները</strong></span>
        <div class="w-135"></div>
    </div>
</section>
<section class="courses">

    <div class="container">
        <div class="choose-certificate d-flex">
            <a href="<?=$class_8['link']?>" class="certificate-item <?=$class_8['class']?>" title="Ներբեռնել">
                <img src="/main/assets/images/cert-1.jpg">
                <strong>
                    8-րդ դասարան
                </strong>
            </a>
            <a href="<?=$class_9['link']?>" class="certificate-item <?=$class_9['class']?>" title="Ներբեռնել">
                <img src="/main/assets/images/cert-2.jpg">
                <strong>
                    9-րդ դասարան
                </strong>

            </a>
            <a href="<?=$class_10['link']?>" class="certificate-item <?=$class_10['class']?>" title="Ներբեռնել">
                <img src="/main/assets/images/cert-1.jpg">
                <strong>
                    10-րդ դասարան
                </strong>

            </a>
            <a href="<?=$class_11['link']?>" class="certificate-item <?=$class_11['class']?>" title="Ներբեռնել">
                <img src="/main/assets/images/cert-2.jpg">
                <strong>
                    11-րդ դասարան
                </strong>
            </a>

        </div>
    </div>
</section>