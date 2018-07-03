<?php

namespace backend\controllers;

use common\models\LessonGropuRel;
use common\models\Lessons;
use common\models\PreTests;
use Yii;
use common\models\LessonsGroup;
use common\models\search\LessonsGroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LessonsGroupController implements the CRUD actions for LessonsGroup model.
 */
class LessonsGroupController extends Controller
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
     * Lists all LessonsGroup models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LessonsGroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LessonsGroup model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new LessonsGroup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LessonsGroup();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            LessonGropuRel::SaveLessons($model->id, Yii::$app->request->post());
            Yii::$app->session->setFlash('success', 'Saved');
            return $this->redirect(['update', 'id' => $model->id]);

        }

        return $this->render('create', [
            'model' => $model,
            'glob_lessons' => Lessons::GetAll(),
            'pre_lessons' => PreTests::GetAll(),
        ]);
    }

    /**
     * Updates an existing LessonsGroup model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            LessonGropuRel::SaveLessons($model->id, Yii::$app->request->post());
            Yii::$app->session->setFlash('success', 'Saved');
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'glob_lessons' => Lessons::GetAll(),
            'pre_lessons' => PreTests::GetAll(),
            'all_lessons' => LessonGropuRel::GetAllById($id)
        ]);
    }

    /**
     * Deletes an existing LessonsGroup model.
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
     * Finds the LessonsGroup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LessonsGroup the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LessonsGroup::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
