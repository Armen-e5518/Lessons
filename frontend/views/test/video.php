<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');
$this->registerCssFile('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');

$this->registerJsFile('//code.jquery.com/jquery-1.12.4.js');
$this->registerJsFile('//code.jquery.com/ui/1.12.1/jquery-ui.js');
$this->registerJsFile('/js/drag/index.js');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['about'] = 'lessons';
?>

<section class="breadcrumb">
    <div class="container">
            <span class="previous-step"><a href="/lessons"><i class="fas fa-arrow-left"></i><span
                            class="previous-step-txt">վերադառնալ դասերին</span></a></span>
        <span class="page-title">
						<strong class="test-name">դաս 1 - առողջության գործոնները</strong>
						<strong class="test-step">Քայլ 2 / 3</strong>
					</span>
        <div class="passed-step"><span class="passed-time"><i class="fas fa-clock"></i><span
                        id="timer">00:00:00</span></span></div>
    </div>
</section>

<section class="lesson-details">
    <a href="#" class="user-avatar-small"><img src="/main/assets/images/users/user-avatar-small.png" alt="Կարինե"
                                               title="Կարինե"></a>
    <div class="container draggable-block">
        <div class="affecting-factors-set droptrue" id="sortable1">
            <div class="factor-item responsible-behavior true-item" data-id="1">
                <img src="/main/assets/images/affecting-factors/responsible-behavior-icon.png"
                     alt="Պատասխանատու վարքագիծ" title="Պատասխանատու վարքագիծ">
                <span>Պատասխանատու վարքագիծ</span>
            </div>
            <div class="factor-item poverty" data-id="2">
                <img src="/main/assets/images/affecting-factors/poverty-icon.png" alt="Աղքատություն"
                     title="Աղքատություն">
                <span>Աղքատություն</span>
            </div>
            <div class="factor-item training" data-id="3">
                <img src="/main/assets/images/affecting-factors/training-icon.png" alt="Մարզանք" title="Մարզանք">
                <span>Մարզանք</span>
            </div>
            <div class="factor-item food-availability" data-id="4">
                <img src="/main/assets/images/affecting-factors/food-availability-icon.png"
                     alt="Սնունդ, սննդի հասանելիություն" title="Սնունդ, սննդի հասանելիություն">
                <span>Սնունդ, սննդի հասանելիություն</span>
            </div>
            <div class="factor-item social-environment" data-id="5">
                <img src="/main/assets/images/affecting-factors/social-environment-icon.png"
                     alt="Շրջակա և սոցիալական միջավայր" title="Շրջակա և սոցիալական միջավայր">
                <span>Շրջակա և սոցիալական միջավայր</span>
            </div>

            <div class="factor-item harmful-habits" data-id="6">
                <img src="/main/assets/images/affecting-factors/harmful-habits-icon.png"
                     alt="Վնասակար սովորություններ" title="Վնասակար սովորություններ">
                <span>Վնասակար սովորություններ</span>
            </div>
            <div class="factor-item heritage" data-id="7">
                <img src="/main/assets/images/affecting-factors/heritage-icon.png" alt="Ժառանգականություն"
                     title="Ժառանգականություն">
                <span>Ժառանգականություն</span>
            </div>
            <div class="factor-item living-working-conditions" data-id="8">
                <img src="/main/assets/images/affecting-factors/living-working-conditions-icon.png"
                     alt="Ապրելու և աշխատանքի պայմանները" title="Ապրելու և աշխատանքի պայմանները">
                <span>Ապրելու և աշխատանքի պայմանները</span>
            </div>
            <div class="factor-item spiritual-status" data-id="9">
                <img src="/main/assets/images/affecting-factors/spiritual-status-icon.png" alt="Հոգեվիճակ"
                     title="Հոգեվիճակ">
                <span>Հոգեվիճակ</span>
            </div>
            <div class="factor-item education" data-id="10">
                <img src="/main/assets/images/affecting-factors/education-icon.png" alt="Կրթություն"
                     title="Կրթություն">
                <span>Կրթություն</span>
            </div>
            <div class="factor-item awareness " data-id="11">
                <img src="/main/assets/images/affecting-factors/awareness-icon.png" alt="Իրազեկվածություն"
                     title="Իրազեկվածություն">
                <span>Իրազեկվածություն</span>
            </div>
        </div>
        <div class="draggable-area droptrue row-1" id="sortable2">
            <p>A</p>
            <!--                <strong class="draggable-text">Ամենակարևոր գործոնը տեղավորիր այստեղ</strong>-->
        </div>
        <div class="draggable-area droptrue row-1" id="sortable3">
            <p>A</p>
        </div>
        <div class="draggable-area droptrue row-1" id="sortable4">
            <p>A</p>
        </div>
    </div>
</section>
