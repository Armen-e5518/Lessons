<?php

use common\models\UserTestsState;

/* @var $this yii\web\View */

$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');

$this->title = '“Առողջ Ապրելակերպ” առցանց դասընթա';
$this->params['class'] = 'inner-page';
$this->params['lessons'] = 'true';
$flag = true;
?>
<section class="breadcrumb">
    <div class="container">
        <span></span>
        <span class="page-title"><strong><?= $lessons_global['title'] ?></strong> (<?= $lessons_global['grade'] ?>
            -րդ դասարան)</span>
        <div class="passed-step">Ընթացք՝ <span><?= $done_count ?> / <?= count($lessons_group) ?></span></div>
    </div>
</section>
<section class="lessons-list">
    <div class="container">
        <ul>
            <?php if (!empty($lessons_group)) : ?>
                <?php foreach ($lessons_group as $k => $item) :

                    if ($k == count($lessons_group) - 1 && $item['type'] == 1 && $class != 'upcoming-lesson') {
                        $last_test = UserTestsState::GetSecondPreLesson($item['lesson_id']);
                        if ($last_test['status'] == 0) {
                            $href = "/test/primary?id={$item['lesson_id']}&l={$last_test['id']}";
                            $class = 'current-lesson';
                            $item['u_status'] = 0;
                        }
                    } else {
                        $class = 'passed-lesson';
                        if ($item['u_status'] == 0 || !$flag) {
                            $class = $flag ? 'current-lesson' : 'upcoming-lesson';
                            $flag = false;
                        }
                        $type = $item['type'] == 1 ? 'primary' : '';
                        $type = $item['type'] == 2 ? 'global' : $type;
                        $href = $class == 'current-lesson' ? "/test/{$type}?id={$item['lesson_id']}&l=0" : '#';
                    }
                    ?>
                    <li class="<?= $class ?>">
                        <a href="<?= $href ?>"><i
                                    class="fas fa-check"></i><strong><?= $item['title'] ?></strong></a>
                        <?php if (!empty($item['u_status'])): ?>
                            <span class="score">Միավորներ՝ <?= $item['point'] ?> / 100</span>
                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
