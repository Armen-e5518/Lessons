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
$this->registerJsFile('//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js');
$this->registerJsFile('/js/drag/index.js');
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
        <div class="passed-step"><span class="passed-time"><i class="fas fa-clock"></i><span
                        id="timer">00:00:00</span></span></div>
    </div>
</section>

<section class="lesson-details">
    <a href="#" class="user-avatar-small">
        <img src="/main/assets/images/users/avatars/<?=\common\models\Config::GetAvatar()?>"
             alt="<?= Yii::$app->user->identity->first_name ?>"
                                               title="<?= Yii::$app->user->identity->first_name ?>">
    </a>
    <div class="container draggable-block">
        <div class="affecting-factors-set sorting" id="sortable1">
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <div class="factor-item responsible-behavior <?= $item['status'] ? 'true-item' : '' ?>"
                         style="background: <?= $item['color'] ?>"
                         data-id="<?= $item['id'] ?>">
                        <img src="/admin/uploads/<?= $item['img'] ?>"
                             alt="<?= $item['title'] ?>" title="<?= $item['title'] ?>">
                        <span><?= $item['title'] ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="drag-right-area">
            <strong class="draggable-text">Ամենակարևոր գործոնը տեղավորիր այստեղ</strong>
            <div class="row-1 drag-bock-r">
                <div class="draggable-area sorting " id="sortable2">
                </div>
                <samp class="number">1</samp>
            </div>
            <div class="row-1 drag-bock-r">
                <div class="draggable-area sorting row-2" id="sortable3">
                </div>
                <samp class="number">4</samp>
            </div>
            <div class="row-1 drag-bock-r">
                <div class="draggable-area sorting row-3" id="sortable4">
                </div>
                <samp class="number">6</samp>
            </div>
        </div>
    </div>
</section>

<script>
    var __id = `<?=Yii::$app->request->get('id')?>`;
    var __global_id = `<?=Yii::$app->request->get('g')?>`;
    var __Type = <?=\common\models\LessonsTest::TYPE_DRAG?>;
    var __pop_text = `<?=$data['text_pop']?>`;
    var __data = <?=json_encode($items, JSON_UNESCAPED_UNICODE)?>;
</script>