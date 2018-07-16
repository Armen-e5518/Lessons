<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PreTests */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js');
$this->registerJsFile('/admin/js/question.js');
?>

<div class="pre-tests-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'pop_text')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <div class="" id="questions">
                <?php if (!empty($questions)): ?>
                    <?php foreach ($questions as $kay => $question) : ?>
                        <div class="item row">
                            <H4>Question <?= $kay + 1 ?> </H4>
                            <div class="col-md-12 index" data-index=<?= $kay + 1 ?>>
                                <lable>Question</lable>
                                <input value="<?= $question['question'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][question]>
                            </div>
                            <div class="col-md-3">
                                <lable>Answer 1</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('1', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_1]>
                                <input value="<?= $question['answer_1'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_1]>
                            </div>
                            <div class="col-md-3">
                                <lable>Answer 2</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('2', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_2]>
                                <input value="<?= $question['answer_2'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_2]>
                            </div>
                            <div class="col-md-3">
                                <lable>Answer 3</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('3', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_3]>
                                <input value="<?= $question['answer_3'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_3]>
                            </div>
                            <div class="col-md-3">
                                <lable>Answer 4</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('4', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_4]>
                                <input value="<?= $question['answer_4'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_4]>
                            </div>
                            <div class="col-md-3 <?= empty($question['answer_5']) ? 'hide-b' : '' ?>">
                                <lable>Answer 5</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('5', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_5]>
                                <input value="<?= $question['answer_5'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_5]>
                            </div>
                            <div class="col-md-3 <?= empty($question['answer_6']) ? 'hide-b' : '' ?>">
                                <lable>Answer 6</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('6', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_6]>
                                <input value="<?= $question['answer_6'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_6]>
                            </div>
                            <div class="col-md-3 <?= empty($question['answer_7']) ? 'hide-b' : '' ?>">
                                <lable>Answer 7</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('7', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_7]>
                                <input value="<?= $question['answer_7'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_7]>
                            </div>
                            <div class="col-md-3 <?= empty($question['answer_8']) ? 'hide-b' : '' ?>">
                                <lable>Answer 8</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('8', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_8]>
                                <input value="<?= $question['answer_8'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_8]>
                            </div>
                            <div class="col-md-3 <?= empty($question['answer_9']) ? 'hide-b' : '' ?>">
                                <lable>Answer 9</lable>
                                <br>
                                <span>Right </span>
                                <input type="checkbox" <?= (strpos('9', $question['right_answers']) === false) ? '' : 'checked' ?>
                                       name=test[index_<?= $kay + 1 ?>][right_9]>
                                <input value="<?= $question['answer_9'] ?>" class="form-control" type="text"
                                       name=test[index_<?= $kay + 1 ?>][answer_9]>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="" style="margin: 5px 5px;"
                                        class="btn btn-success add_new_answer">+
                                </button>
                            </div>
                            <hr>
                        </div>
                    <?php endforeach; ?>
                <?php else:; ?>
                    <div class="item row">
                        <H4>Question 1 </H4>
                        <div class="col-md-12 index" data-index=1>
                            <lable>Question</lable>
                            <input class="form-control" type="text" name=test[index_1][question]>
                        </div>
                        <div class="col-md-3">
                            <lable>Answer 1</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_1]>
                            <input class="form-control" type="text" name=test[index_1][answer_1]>
                        </div>
                        <div class="col-md-3">
                            <lable>Answer 2</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_2]>
                            <input class="form-control" type="text" name=test[index_1][answer_2]>
                        </div>
                        <div class="col-md-3">
                            <lable>Answer 3</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_3]>
                            <input class="form-control" type="text" name=test[index_1][answer_3]>
                        </div>
                        <div class="col-md-3">
                            <lable>Answer 4</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_4]>
                            <input class="form-control" type="text" name=test[index_1][answer_4]>
                        </div>
                        <div class="col-md-3 hide-b">
                            <lable>Answer 5</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_5]>
                            <input class="form-control" type="text" name=test[index_1][answer_5]>
                        </div>
                        <div class="col-md-3 hide-b">
                            <lable>Answer 6</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_6]>
                            <input class="form-control" type="text" name=test[index_1][answer_6]>
                        </div>
                        <div class="col-md-3 hide-b">
                            <lable>Answer 7</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_7]>
                            <input class="form-control" type="text" name=test[index_1][answer_7]>
                        </div>
                        <div class="col-md-3 hide-b">
                            <lable>Answer 8</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_8]>
                            <input class="form-control" type="text" name=test[index_1][answer_8]>
                        </div>
                        <div class="col-md-3 hide-b">
                            <lable>Answer 9</lable>
                            <br>
                            <span>Right </span>
                            <input type="checkbox" name=test[index_1][right_9]>
                            <input class="form-control" type="text" name=test[index_1][answer_9]>
                        </div>
                        <div class="col-md-3">
                            <button type="button" id="" style="margin: 5px 5px;"
                                    class="btn btn-success add_new_answer">+
                            </button>
                        </div>
                        <hr>
                    </div>
                <?php endif; ?>
            </div>
            <br>
            <button type="button" id="add_new_form" class="btn btn-success">Add new question</button>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
