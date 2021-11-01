<?php

namespace app\controllers;

use Yii;
use app\models\OkupasiFileXt;
use app\models\OkupasiFileXtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OkupasiFileXtController implements the CRUD actions for OkupasiFileXt model.
 */
class OkupasiFileXtController extends Controller
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
     * Lists all OkupasiFileXt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OkupasiFileXtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OkupasiFileXt model.
     * @param integer $patient_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($patient_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($patient_id, $seq),
        ]);
    }

    /**
     * Creates a new OkupasiFileXt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OkupasiFileXt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OkupasiFileXt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $patient_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($patient_id, $seq)
    {
        $model = $this->findModel($patient_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OkupasiFileXt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $patient_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($patient_id, $seq)
    {
        $this->findModel($patient_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OkupasiFileXt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $patient_id
     * @param integer $seq
     * @return OkupasiFileXt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($patient_id, $seq)
    {
        if (($model = OkupasiFileXt::findOne(['patient_id' => $patient_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
