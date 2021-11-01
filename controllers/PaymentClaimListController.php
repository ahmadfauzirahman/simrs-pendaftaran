<?php

namespace app\controllers;

use Yii;
use app\models\PaymentClaimList;
use app\models\PaymentClaimListSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PaymentClaimListController implements the CRUD actions for PaymentClaimList model.
 */
class PaymentClaimListController extends Controller
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
     * Lists all PaymentClaimList models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PaymentClaimListSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PaymentClaimList model.
     * @param integer $payment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($payment_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($payment_id, $seq),
        ]);
    }

    /**
     * Creates a new PaymentClaimList model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PaymentClaimList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payment_id' => $model->payment_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PaymentClaimList model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $payment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($payment_id, $seq)
    {
        $model = $this->findModel($payment_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payment_id' => $model->payment_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PaymentClaimList model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $payment_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($payment_id, $seq)
    {
        $this->findModel($payment_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PaymentClaimList model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $payment_id
     * @param integer $seq
     * @return PaymentClaimList the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($payment_id, $seq)
    {
        if (($model = PaymentClaimList::findOne(['payment_id' => $payment_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
