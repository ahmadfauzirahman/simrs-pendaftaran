<?php

namespace app\controllers;

use Yii;
use app\models\billingPmtDet;
use app\models\BillingPmtDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BillingPmtDetController implements the CRUD actions for billingPmtDet model.
 */
class BillingPmtDetController extends Controller
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
     * Lists all billingPmtDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BillingPmtDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single billingPmtDet model.
     * @param integer $bill_pmt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($bill_pmt_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($bill_pmt_id, $seq),
        ]);
    }

    /**
     * Creates a new billingPmtDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new billingPmtDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bill_pmt_id' => $model->bill_pmt_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing billingPmtDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $bill_pmt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($bill_pmt_id, $seq)
    {
        $model = $this->findModel($bill_pmt_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bill_pmt_id' => $model->bill_pmt_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing billingPmtDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $bill_pmt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($bill_pmt_id, $seq)
    {
        $this->findModel($bill_pmt_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the billingPmtDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $bill_pmt_id
     * @param integer $seq
     * @return billingPmtDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($bill_pmt_id, $seq)
    {
        if (($model = billingPmtDet::findOne(['bill_pmt_id' => $bill_pmt_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
