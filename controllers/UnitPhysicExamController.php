<?php

namespace app\controllers;

use Yii;
use app\models\UnitPhysicExam;
use app\models\UnitPhysicExamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UnitPhysicExamController implements the CRUD actions for UnitPhysicExam model.
 */
class UnitPhysicExamController extends Controller
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
     * Lists all UnitPhysicExam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UnitPhysicExamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UnitPhysicExam model.
     * @param integer $unit_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($unit_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($unit_id, $seq),
        ]);
    }

    /**
     * Creates a new UnitPhysicExam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UnitPhysicExam();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'unit_id' => $model->unit_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UnitPhysicExam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $unit_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($unit_id, $seq)
    {
        $model = $this->findModel($unit_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'unit_id' => $model->unit_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UnitPhysicExam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $unit_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($unit_id, $seq)
    {
        $this->findModel($unit_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UnitPhysicExam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $unit_id
     * @param integer $seq
     * @return UnitPhysicExam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($unit_id, $seq)
    {
        if (($model = UnitPhysicExam::findOne(['unit_id' => $unit_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
