<?php

namespace app\controllers;

use Yii;
use app\models\ServiceExtDat;
use app\models\ServiceExtDatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ServiceExtDatController implements the CRUD actions for ServiceExtDat model.
 */
class ServiceExtDatController extends Controller
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
     * Lists all ServiceExtDat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServiceExtDatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ServiceExtDat model.
     * @param integer $service_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($service_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($service_id, $seq),
        ]);
    }

    /**
     * Creates a new ServiceExtDat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ServiceExtDat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'service_id' => $model->service_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ServiceExtDat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $service_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($service_id, $seq)
    {
        $model = $this->findModel($service_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'service_id' => $model->service_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ServiceExtDat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $service_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($service_id, $seq)
    {
        $this->findModel($service_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ServiceExtDat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $service_id
     * @param integer $seq
     * @return ServiceExtDat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($service_id, $seq)
    {
        if (($model = ServiceExtDat::findOne(['service_id' => $service_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
