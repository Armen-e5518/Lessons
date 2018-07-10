<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->registerJsFile('//code.jquery.com/jquery-1.12.4.js');
$this->registerJsFile('/js/choose/index.js');
$this->registerJsFile('/js/timer.js');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['lessons'] = 'true';
?>
<section class="breadcrumb">
    <div class="container">
            <span class="previous-step"><a href="/lessons"><i class="fas fa-arrow-left"></i><span
                            class="previous-step-txt">վերադառնալ դասերին</span></a></span>
        <span class="page-title">
					<strong class="test-name"><?= $data['title'] ?></strong>
						<strong class="test-step">Քայլ <?= $current_lesson ?> / <?= $count ?></strong>
					</span>
        <div class="passed-step"><span class="passed-time"><i class="fas fa-clock"></i><span id="timer">00:00:00</span></span>
        </div>
    </div>
</section>
<section class="lesson-details">
    <a href="#" class="user-avatar-small"><img
                src="/main/assets/images/users/avatars/<?= \common\models\Config::GetAvatar() ?>"
                alt="<?= Yii::$app->user->identity->first_name ?>"
                title="<?= Yii::$app->user->identity->first_name ?>"></a>
    <div class="container">
        <h3>Փորձիր հատկանիշները դասավորել իրենց համապատասխան պաստառի վրա:<br>
            Կարիք չկա երկար մտածելու, արագ տեղավորիր քարտերը:</h3>
        <div class="gender-rights-ditribution">
						<span href="#" class="btn gender-power-btn">
							<a href="javascript:void();" class="fas fa-arrow-left"></a>
							<span>իշխանություն</span>
							<a href="javascript:void();" class="fas fa-arrow-right"></a>
						</span>
            <div class="male-responsibility">
                <h4>Տղամարդ</h4>
            </div>
            <div class="female-responsibility">
                <h4>Կին</h4>
            </div>
        </div>
    </div>
</section>


<script>
    var __pop_text = `<?=$data['text_pop']?>`;
    var __choose_test_id = `<?=Yii::$app->request->get('id')?>`;
    var __global_id = `<?=Yii::$app->request->get('g')?>`;
    var __Type = <?=\common\models\LessonsTest::TYPE_CHOOSE?>;
    var __Data = <?=json_encode($items, JSON_UNESCAPED_UNICODE)?>;

</script>
