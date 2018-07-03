<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;


AppAsset::register($this);

$header_img = !empty($this->params['header_img']) ?     $this->params['header_img'] : '/main/assets/images/logo.png';
$footer_img_1 = !empty($this->params['footer_img_1']) ? $this->params['footer_img_1'] : '/main/assets/images/UNFPA-logo.png';
$footer_img_2 = !empty($this->params['footer_img_2']) ? $this->params['footer_img_2'] : '/main/assets/images/UN-logo.png';


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="<?= !empty($this->params['class']) ? $this->params['class'] : '' ?>">
<?php $this->beginBody() ?>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="<?= $header_img ?>" alt="Առողջ Ապրելակերպ" title="Առողջ Ապրելակերպ"></a>
                <h1><a href="/">Առողջ <br>Ապրելակերպ</a></h1>
            </div>
            <label>
                <input type="checkbox">
                <span class="burger"></span>
                <nav>
                    <ul>
                        <li><a href="/site/about" class="<?= !empty($this->params['about']) ? 'green-txt' : '' ?>">Դասընթացի
                                մասին</a></li>
                        <li><a href="/site/faq" class="<?= !empty($this->params['faq']) ? 'green-txt' : '' ?>">ՀՏՀ</a>
                        </li>
                        <li><a href="/site/contact" class="<?= !empty($this->params['contact']) ? 'green-txt' : '' ?>">Կապ</a>
                        </li>
                        <li><a href="/site/signup" class="<?= !empty($this->params['signup']) ? 'green-txt' : '' ?>"><i
                                        class="fas fa-user-edit"></i>Գրանցում</a></li>
                        <li><a href="/site/login" class="<?= !empty($this->params['login']) ? 'green-txt' : '' ?>"><i
                                        class="fas fa-user-lock"></i>Մուտք</a></li>
                    </ul>
                </nav>
            </label>
        </div>
    </header>
    <?= $content ?>
    <footer>
        <div class="container">
            <span class="copyright">&copy; 2018 “Առողջ Ապրելակերպ” առցանց դասընթաց</span>
            <span class="partners">
				<img src="<?= $footer_img_1 ?>" alt="UNFPA" title="UNFPA">
				<img src="<?= $footer_img_2 ?>" alt="UN" title="UN">
            </span>
        </div>
    </footer>
</div>
<?php if (!empty($this->params['slider'])): ?>
    <a href="<?= $this->params['slider_1'] ?>" class="slide-left"><i class="fas fa-angle-left"></i></a>
    <a href="<?= $this->params['slider_2'] ?>" class="slide-right"><i class="fas fa-angle-right"></i></a>
<?php endif; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
