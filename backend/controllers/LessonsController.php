<?php

namespace backend\controllers;

use backend\components\Helper;
use common\models\ChooseTests;
use common\models\DragLessons;
use common\models\DragTests;
use common\models\LessonsTest;
use common\models\VideoLesson;
use Yii;
use common\models\Lessons;
use common\models\search\LessonsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LessonsController implements the CRUD actions for Lessons model.
 */
class LessonsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Lessons models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LessonsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lessons model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Lessons model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lessons();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            LessonsTest::SaveLessonsTest($model->id, Yii::$app->request->post());
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'drag_lessons' => DragTests::GetAll(),
            'choose_lessons' => ChooseTests::GetAll(),
            'video_lessons' => VideoLesson::GetAll(),
        ]);
    }

    /**
     * Updates an existing Lessons model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
//        Helper::out(LessonsTest::GetAllById($id));
//        exit;
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Helper::out(Yii::$app->request->post());
//            exit;
            LessonsTest::SaveLessonsTest($model->id, Yii::$app->request->post());
            Yii::$app->session->setFlash('success', 'Saved');
            return $this->redirect(['update', 'id' => $id]);
        }

        return $this->render('update', [
            'model' => $model,
            'drag_lessons' => DragTests::GetAll(),
            'choose_lessons' => ChooseTests::GetAll(),
            'video_lessons' => VideoLesson::GetAll(),
            'all_lessons' => LessonsTest::GetAllById($id)
        ]);
    }

    /**
     * Deletes an existing Lessons model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lessons model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lessons the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lessons::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
