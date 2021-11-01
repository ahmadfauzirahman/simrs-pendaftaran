<?php

namespace app\controllers;

use Yii;
use app\models\BillingPmtArDet;
use app\models\BillingPmtArDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BillingPmtArDetController implements the CRUD actions for BillingPmtArDet model.
 */
class BillingPmtArDetController extends Controller
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
     * Lists all BillingPmtArDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BillingPmtArDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BillingPmtArDet model.
     * @param integer $process_id
     * @param integer $invoice_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($process_id, $invoice_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($process_id, $invoice_id),
        ]);
    }

    /**
     * Creates a new BillingPmtArDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BillingPmtArDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'process_id' => $model->process_id, 'invoice_id' => $model->invoice_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BillingPmtArDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $process_id
     * @param integer $invoice_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($process_id, $invoice_id)
    {
        $model = $this->findModel($process_id, $invoice_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'process_id' => $model->process_id, 'invoice_id' => $model->invoice_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BillingPmtArDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $process_id
     * @param integer $invoice_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($process_id, $invoice_id)
    {
        $this->findModel($process_id, $invoice_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BillingPmtArDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $process_id
     * @param integer $invoice_id
     * @return BillingPmtArDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($process_id, $invoice_id)
    {
        if (($model = BillingPmtArDet::findOne(['process_id' => $process_id, 'invoice_id' => $invoice_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
