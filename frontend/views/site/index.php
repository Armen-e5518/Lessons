<?php

/* @var $this yii\web\View */

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->title = '“Առողջ Ապրելակերպ” առցանց դասընթա';
$this->params['class'] = 'home-slide';
?>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="/main/assets/images/logo.png" alt="Առողջ Ապրելակերպ" title="Առողջ Ապրելակերպ"></a>
                <h1><a href="/">Առողջ <br>Ապրելակերպ</a></h1>
            </div>
            <label>
                <input type="checkbox">
                <span class="burger"></span>
                <nav>
                    <ul>
                        <li><a href="tests.html">Դասընթացի մասին</a></li>
                        <li><a href="#">ՀՏՀ</a></li>
                        <li><a href="#">Կապ</a></li>
                        <li><a href="/site/signup" class="green-txt"><i class="fas fa-user-edit"></i>Գրանցում</a></li>
                        <li><a href="/site/login" class="green-txt"><i class="fas fa-user-lock"></i>Մուտք</a></li>
                    </ul>
                </nav>
            </label>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="propmt-access">
                <h3>Եղիր տեղեկացված, <br>պատասխանատու, առողջ</h3>
                <a href="/site/signup" class="btn green-btn"><i class="fas fa-user-edit"></i>գրանցվել</a>
                <a href="/site/login"  class="btn blue-btn"><i class="fas fa-user-lock"></i>մուտք</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <span class="copyright">&copy; 2018 “Առողջ Ապրելակերպ” առցանց դասընթաց</span>
            <span class="partners">
						<img src="/main/assets/images/UNFPA-logo.png" alt="UNFPA" title="UNFPA">
						<img src="/main/assets/images/UN-logo.png" alt="UN" title="UN">
					</span>
        </div>
    </footer>
</div>
<a href="#" class="slide-left"><i class="fas fa-angle-left"></i></a>
<a href="/site/index2" class="slide-right"><i class="fas fa-angle-right"></i></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

</script>
