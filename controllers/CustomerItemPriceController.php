<?php

namespace app\controllers;

use Yii;
use app\models\CustomerItemPrice;
use app\models\CustomerItemPriceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CustomerItemPriceController implements the CRUD actions for CustomerItemPrice model.
 */
class CustomerItemPriceController extends Controller
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
     * Lists all CustomerItemPrice models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CustomerItemPriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CustomerItemPrice model.
     * @param integer $customer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($customer_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($customer_id, $seq),
        ]);
    }

    /**
     * Creates a new CustomerItemPrice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CustomerItemPrice();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'customer_id' => $model->customer_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CustomerItemPrice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $customer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($customer_id, $seq)
    {
        $model = $this->findModel($customer_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'customer_id' => $model->customer_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CustomerItemPrice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $customer_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($customer_id, $seq)
    {
        $this->findModel($customer_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CustomerItemPrice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $customer_id
     * @param integer $seq
     * @return CustomerItemPrice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($customer_id, $seq)
    {
        if (($model = CustomerItemPrice::findOne(['customer_id' => $customer_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
