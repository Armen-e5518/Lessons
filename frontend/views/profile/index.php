<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->registerCssFile('/main/assets/css/bootstrap.min.css');
$this->registerCssFile('/main/assets/css/reset.css');
$this->registerCssFile('/main/assets/css/style.css');
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.13/css/all.css');



$this->title = '“Առողջ Ապրելակերպ”';
$this->params['class'] = 'inner-page';
$this->params['profile'] = 'true';
?>
<section class="breadcrumb">
    <div class="container">
        <span class="previous-step"><a href="#"><i class="fas fa-arrow-left"></i><span class="previous-step-txt">վերադառնալ</span></a></span>
        <span class="page-title"><strong>Կարգավորումներ</strong></span>
        <div class="w-135"></div>
    </div>
</section>
<section class="edit-profile-info">
    <div class="container">
        <div class="propmt-access regis-login">
            <h4>Գրանցվել</h4>
            <form>
                <div class="form-fld">
                    <label>Անուն  </label>
                    <input type="text" name="" >
                </div>
                <div class="form-fld">
                    <label>Ազգանուն  </label>
                    <input type="text" name="">
                </div>
                <div class="form-fld">
                    <label>Սեռ  </label>
                    <label class="radio-label"><input type="radio" name="gender"><span></span>Արական</label>
                    <label class="radio-label"><input type="radio" name="gender"><span></span>Իգական</label>
                </div>
                <div class="form-fld">
                    <label>Մարզ  </label>
                    <select>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                    </select>
                </div>
                <div class="form-fld">
                    <label>Քաղաք  </label>
                    <select>
                        <option>Ընտրեք քաղաքը</option>
                        <option>Արագածոտն</option>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                    </select>
                </div>
                <div class="form-fld">
                    <label>Համայնք  </label>
                    <select>
                        <option>Ընտրեք Համայնքը</option>
                        <option>Արագածոտն</option>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                        <option>Երևան</option>
                        <option>Արագածոտն</option>
                    </select>
                </div>
                <div class="form-fld">
                    <label>Օգտանուն  </label>
                    <input type="text" name="" disabled="">
                </div>
                <div class="form-fld">
                    <label>Ներկա Գաղտնաբառ  </label>
                    <input type="password" name="">
                </div>
                <div class="form-fld">
                    <label>Նոր գաղտնաբառ </label>
                    <input type="password" name="">
                </div>
                <div class="form-fld">
                    <label>Հաստատել Նոր գաղտնաբառը  </label>
                    <input type="password" name="">
                </div>
            </form>

            <button class="btn green-btn">Հաստատել</button>
        </div>
    </div>
</section>