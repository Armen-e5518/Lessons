<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
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
                <a href="/"><img src="/main/assets/images/logo-colorful.png" alt="Առողջ Ապրելակերպ"
                                 title="Առողջ Ապրելակերպ"></a>
                <h1><a href="/">Առողջ <br>Ապրելակերպ</a></h1>
            </div>
            <label>
                <input type="checkbox">
                <span class="burger"></span>
                <nav>
                    <ul>
                        <li>
                            <a href="/profile/about" class="<?= !empty($this->params['about']) ? 'green-txt' : '' ?>">
                                Դասընթացի մասին</a>
                        </li>
                        <li>
                            <a href="/profile/faq"
                               class="<?= !empty($this->params['faq']) ? 'green-txt' : '' ?>">ՀՏՀ</a>
                        </li>
                        <li>
                            <a href="/profile/contact"
                               class="<?= !empty($this->params['contact']) ? 'green-txt' : '' ?>">Կապ</a>
                        </li>
                        <li>
                            <a href="/lessons" class="<?= !empty($this->params['lessons']) ? 'green-txt' : '' ?>">
                                Իմ դասընթացը</a>
                        </li>
                        <li class="dropdown">
                            <button onclick="myFunction()"
                                    class="dropbtn <?= !empty($this->params['profile']) ? 'green-txt' : '' ?>"><i
                                        class="fas fa-user"></i><?= Yii::$app->user->identity->first_name ?> <i
                                        class="fas fa-angle-down"></i></button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="/profile" class=" <?= !empty($this->params['profile']) ? 'green-txt' : '' ?>">Իմ
                                    էջ</a>
                                <?= Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Ելք ',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm() ?>
                            </div>
                        </li>
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
				<img src="/main/assets/images/UNFPA-logo-colorful.png" alt="UNFPA" title="UNFPA">
				<img src="/main/assets/images/UN-logo-colorful.png" alt="UN" title="UN">
            </span>
        </div>
    </footer>
</div>

<div class="lesson-popup-layer">
    <div class="lesson-popup">
        <div class="lesson-popup-body">
            <div class="lesson-popup-body-inner">
                <a href="#" class="lesson-popup-close"><i class="fas fa-times"></i></a>
                <p>
                    <strong id="pop_title" class="blue-txt" style="display: none">
                        <i style="display:none;" class="fas fa-check-circle leading-symbol"></i>
                        <span></span>
                    </strong>
                    <span id="pop_text"></span>
                </p>
            </div>
            <a href="" style="display:none;" id="pop_button" class="btn">Վերադասավորել</a>
        </div>
        <div class="user-avatar-large">
            <img src="/main/assets/images/users/user-avatar-large.png"
                 alt="<?= Yii::$app->user->identity->first_name ?>"
                 title="<?= Yii::$app->user->identity->first_name ?>"></div>
    </div>
</div>
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show-drop");
    }

    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show-drop')) {
                    openDropdown.classList.remove('show-drop');
                }
            }
        }
    }
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
