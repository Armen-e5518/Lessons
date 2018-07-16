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
$this->registerJsFile('/js/video/index.js');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['lessons'] = 'true';
?>

<section class="breadcrumb">
    <div class="container">
        <span class="previous-step"><a href="/lessons"><i class="fas fa-arrow-left"></i><span class="previous-step-txt">վերադառնալ </span></a></span>
        <span class="page-title">
            <strong class="test-name"><?= $data['title'] ?></strong>
            <strong class="test-step">Քայլ <?= $current_lesson ?> / <?= $count ?></strong>
        </span>

        <span class="previous-step">
            <a id="next_lesson" href="">
                <span class="previous-step-txt">Առաջ</span>
                  <i class="fas fa-arrow-right"></i>
            </a>
        </span>
        <div class="w-135"></div>
    </div>
</section>
<section class="lesson-details">
    <a href="#" class="user-avatar-small"><img
                src="/main/assets/images/users/avatars/<?= \common\models\Config::GetAvatar() ?>"
                alt="<?= Yii::$app->user->identity->first_name ?>"
                title="<?= Yii::$app->user->identity->first_name ?>"></a>
    <div class="container">
        <div class="text-video-area">
            <?php if (!empty($data['text_1'])): ?>
                <h3><?= $data['text_1'] ?></h3>
            <?php endif; ?>
            <?php if (!empty($data['video_url'])): ?>
                <iframe src='https://www.youtube.com/embed/<?= \backend\components\Helper::GetVideoId($data['video_url']) ?>'
                        width='' height=''></iframe>
            <?php endif; ?>
            <?php if (!empty($data['text_2'])): ?>
                <h3><?= $data['text_2'] ?></h3>
            <?php endif; ?>
        </div>
    </div>
</section>
<script>
    var __id = `<?=Yii::$app->request->get('id')?>`;
    var __global_id = `<?=Yii::$app->request->get('g')?>`;
    var __Type = <?=\common\models\LessonsTest::TYPE_VIDEO?>;
    var __pop_text = `<?=$data['pop_text']?>`;
    var __data = '';
</script>