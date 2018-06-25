<?php

/* @var $this yii\web\View */

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->title = '“Առողջ Ապրելակերպ” առցանց դասընթա';
$this->params['class'] = 'inner-page';
$this->params['lessons'] = 'true';
?>
<section class="breadcrumb_m">
    <div class="container">
        <span></span>
        <span class="page-title"><strong>Առողջ ապրելակերպ դասընթաց</strong> (8-րդ դասարանների համար)</span>
        <div class="passed-step">Ընթացք՝ <span>2 / 10</span></div>
    </div>
</section>
<section class="lessons-list">
    <div class="container">
        <ul>
            <li class="passed-lesson">
                <a href="#"><i class="fas fa-check"></i><strong>Նախաթեստ</strong></a>
                <span class="score">Միավորներ՝ 40 / 80</span>
            </li>
            <li class="passed-lesson">
                <a href="test1.html"><i class="fas fa-check"></i><strong>դաս 1 - առողջության գործոնները</strong></a>
                <span class="score">Միավորներ՝ 90 / 100</span>
            </li>
            <li class="current-lesson">
                <a href="test2.html"><i></i><strong>դաս 2 - սեռային կամ գենդերային դերեր</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 3 - հասունացում</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 4 - հիգիենան հասունացման շրջանում</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 5 - դժվար տարիք</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 6 - ի՞նչ է սերը</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 7 - ծնող լինելու արվեստը</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 8 - ապագա ծնողներ</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 9 - սեռավարակներ</strong></a>
            </li>
            <li class="upcoming-lesson">
                <a href="#"><strong>դաս 10 - անխոհեմ սեռական վարքագծի հնարավոր հետեվանքները</strong></a>
            </li>
        </ul>
    </div>
</section>
