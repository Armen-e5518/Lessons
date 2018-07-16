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
                            <?php for ($i = 1; $i < 9; $i++): ?>
                                <?php if (!empty($item['answer_' . $i])): ?>
                                    <div><input type="checkbox" name="test[<?= $item['id'] ?>][<?= $i ?>]"
                                                id="test[<?= $item['id'] ?>][<?= $i ?>]"><label
                                                for="test[<?= $item['id'] ?>][<?= $i ?>]"><?= $item['answer_' . $i] ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        <?php else: ?>
                            <?php for ($i = 1; $i < 9; $i++): ?>
                                <?php if (!empty($item['answer_' . $i])): $n = rand(1, 1000) ?>
                                    <div><input type="radio" name="test[<?= $item['id'] ?>][rad]" value="<?= $i ?>"
                                                id="<?= $n ?>"><label
                                                for="<?= $n ?>"><?= $item['answer_' . $i] ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
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
