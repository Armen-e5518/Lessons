<?php

namespace frontend\controllers;

use backend\components\Data;
use common\models\ChooseTestRes;
use common\models\City;
use common\models\DragTestRes;
use common\models\Schools;
use Yii;
use yii\web\Controller;
use \yii\web\Response;

/**
 * Site controller
 */
class AjaxController extends Controller
{

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }


    public function actionGetCityByRegion()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post['id'])) {
                return Schools::GetCityByRegion([$post['id']]);
            }
        }
        return null;
    }

    public function actionGetCommunity()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post['region_id'] && !empty($post['city_id']))) {
                return Schools::GetCommunity($post['region_id'], $post['city_id']);
            }
        }
        return null;
    }

    public function actionGetSchool()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post['region_id'] && !empty($post['city_id']) && !empty($post['community_id']))) {
                return Schools::GetSchool($post['region_id'], $post['city_id'], $post['community_id']);
            }
        }
        return null;
    }


    public function actionSaveChooseTest()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post)) {
                return ChooseTestRes::SaveTest($post);
            }
        }
        return null;
    }

    public function actionSaveDragTest()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post)) {
                return DragTestRes::SaveDragTest($post);
            }
        }
        return null;
    }
}
