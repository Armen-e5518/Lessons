<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['change'] = 'true';
?>
<section class="breadcrumb">
    <div class="container">
        <span class="previous-step"><a href="#"><i class="fas fa-arrow-left"></i><span class="previous-step-txt">վերադառնալ</span></a></span>
        <span class="page-title"><strong>Դասընթացներ</strong></span>
        <div class="w-135"></div>
    </div>
</section>
<section class="courses">

    <div class="container">
        <div class="choose-course d-flex" data-c="<?= Yii::$app->user->identity->grade ?>">
            <a href="<?= $class_8['link'] ?>"
               class="course-item  <?= $class_8['class'] ?> <?= $class_8['class1'] ?>">
                <strong>
                    8-րդ դասարան
                </strong>

            </a>
            <a href="<?= $class_9['link'] ?>"
               class="course-item <?= $class_9['class'] ?> <?= $class_9['class1'] ?>">
                <strong>
                    9-րդ դասարան
                </strong>

            </a>
            <a href="<?= $class_10['link'] ?>"
               class="course-item <?= $class_10['class'] ?> <?= $class_10['class1'] ?>">
                <strong>
                    10-րդ դասարան
                </strong>

            </a>
            <a href="<?= $class_11['link'] ?>"
               class="course-item <?= $class_11['class'] ?> <?= $class_11['class1'] ?>">
                <strong>
                    11-րդ դասարան
                </strong>

            </a>
        </div>
    </div>
</section>