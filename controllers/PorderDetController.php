<?php

namespace app\controllers;

use Yii;
use app\models\PorderDet;
use app\models\PorderDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PorderDetController implements the CRUD actions for PorderDet model.
 */
class PorderDetController extends Controller
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
     * Lists all PorderDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PorderDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PorderDet model.
     * @param integer $order_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($order_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($order_id, $seq),
        ]);
    }

    /**
     * Creates a new PorderDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PorderDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_id' => $model->order_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PorderDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $order_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($order_id, $seq)
    {
        $model = $this->findModel($order_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_id' => $model->order_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PorderDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $order_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($order_id, $seq)
    {
        $this->findModel($order_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PorderDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $order_id
     * @param integer $seq
     * @return PorderDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($order_id, $seq)
    {
        if (($model = PorderDet::findOne(['order_id' => $order_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
