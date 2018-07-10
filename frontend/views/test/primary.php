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
$this->registerJsFile('/js/pre/index.js');
$this->registerJsFile('/js/timer.js');


$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['lessons'] = 'true';
?>
<form action="" method="post">
    <section class="breadcrumb">
        <div class="container">
            <span class="previous-step"><a href="/lessons"><i class="fas fa-arrow-left"></i><span
                            class="previous-step-txt">վերադառնալ դասերին</span></a></span>
            <span class="page-title">
						<strong class="test-name"><?= $data['title'] ?></strong>
					</span>
            <div class="passed-step"><span class="passed-time"><i class="fas fa-clock"></i><span
                            id="timer">00:00:00</span></span>
                <input type="hidden" name="timer" id="timer_input">
            </div>
        </div>
    </section>
    <section class="test-list">
        <div class="container ">
            <?php if (!empty($tests)): ?>
                <?php foreach ($tests as $k => $item): $k++ ?>
                    <div class="test-item">
                        <h3><?= $k . '. ' . $item['question'] ?></h3>
                        <?php if (strpos($item['right_answers'], ',') !== false) : ?>
                            <?php if (!empty($item['answer_1'])): ?>
                                <div><input type="checkbox" name="test[<?= $item['id'] ?>][1]"
                                            id="test[<?= $item['id'] ?>][1]"><label
                                            for="test[<?= $item['id'] ?>][1]"><?= $item['answer_1'] ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($item['answer_2'])): ?>
                                <div><input type="checkbox" name="test[<?= $item['id'] ?>][2]"
                                            id="test[<?= $item['id'] ?>][2]"><label
                                            for="test[<?= $item['id'] ?>][2]"><?= $item['answer_2'] ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($item['answer_3'])): ?>
                                <div><input type="checkbox" name="test[<?= $item['id'] ?>][3]"
                                            id="test[<?= $item['id'] ?>][3]"><label
                                            for="test[<?= $item['id'] ?>][3]"><?= $item['answer_3'] ?></label></div>
                            <?php endif; ?>
                            <?php if (!empty($item['answer_4'])): ?>
                                <div><input type="checkbox" name="test[<?= $item['id'] ?>][4]"
                                            id="test[<?= $item['id'] ?>][4]"><label
                                            for="test[<?= $item['id'] ?>][4]"><?= $item['answer_4'] ?></label>
                                </div>
                            <?php endif; ?>

                        <?php else: ?>
                            <?php if (!empty($item['answer_1'])): $n = rand(1, 1000) ?>
                                <div><input type="radio" name="test[<?= $item['id'] ?>][rad]" value="1"
                                            id="<?= $n ?>"><label
                                            for="<?= $n ?>"><?= $item['answer_1'] ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($item['answer_2'])): $n = rand(1, 1000) ?>
                                <div><input type="radio" name="test[<?= $item['id'] ?>][rad]" value="2"
                                            id="<?= $n ?>"><label
                                            for="<?= $n ?>"><?= $item['answer_2'] ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($item['answer_3'])): $n = rand(1, 1000) ?>
                                <div><input type="radio" name="test[<?= $item['id'] ?>][rad]" value="3"
                                            id="test[<?= $item['id'] ?>][rad]"><label
                                            for="test[<?= $item['id'] ?>][rad]"><?= $item['answer_3'] ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($item['answer_4'])): $n = rand(1, 1000) ?>
                                <div><input type="radio" name="test[<?= $item['id'] ?>][rad]" value="4"
                                            id="<?= $n ?>"><label
                                            for="<?= $n ?>"><?= $item['answer_4'] ?></label>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="propmt-access">
                <button type="submit" class="btn green-btn" name="signup-button">Հաստատել</button>
            </div>
        </div>
    </section>
</form>
<script>
    var __pop_text = `<?=$data['pop_text']?>`;
    var __data = '';
</script>
