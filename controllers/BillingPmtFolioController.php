<?php

namespace app\controllers;

use Yii;
use app\models\BillingPmtFolio;
use app\models\BillingPmtFolioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BillingPmtFolioController implements the CRUD actions for BillingPmtFolio model.
 */
class BillingPmtFolioController extends Controller
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
     * Lists all BillingPmtFolio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BillingPmtFolioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BillingPmtFolio model.
     * @param integer $bill_pmt_id
     * @param integer $folio_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($bill_pmt_id, $folio_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($bill_pmt_id, $folio_id),
        ]);
    }

    /**
     * Creates a new BillingPmtFolio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BillingPmtFolio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bill_pmt_id' => $model->bill_pmt_id, 'folio_id' => $model->folio_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BillingPmtFolio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $bill_pmt_id
     * @param integer $folio_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($bill_pmt_id, $folio_id)
    {
        $model = $this->findModel($bill_pmt_id, $folio_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bill_pmt_id' => $model->bill_pmt_id, 'folio_id' => $model->folio_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BillingPmtFolio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $bill_pmt_id
     * @param integer $folio_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($bill_pmt_id, $folio_id)
    {
        $this->findModel($bill_pmt_id, $folio_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BillingPmtFolio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $bill_pmt_id
     * @param integer $folio_id
     * @return BillingPmtFolio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($bill_pmt_id, $folio_id)
    {
        if (($model = BillingPmtFolio::findOne(['bill_pmt_id' => $bill_pmt_id, 'folio_id' => $folio_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
