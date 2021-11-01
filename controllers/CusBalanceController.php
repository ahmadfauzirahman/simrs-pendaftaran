<?php

namespace app\controllers;

use Yii;
use app\models\CusBalance;
use app\models\CusBalanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CusBalanceController implements the CRUD actions for CusBalance model.
 */
class CusBalanceController extends Controller
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
     * Lists all CusBalance models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CusBalanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CusBalance model.
     * @param integer $customer_id
     * @param integer $currency_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($customer_id, $currency_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($customer_id, $currency_id),
        ]);
    }

    /**
     * Creates a new CusBalance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CusBalance();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'customer_id' => $model->customer_id, 'currency_id' => $model->currency_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CusBalance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $customer_id
     * @param integer $currency_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($customer_id, $currency_id)
    {
        $model = $this->findModel($customer_id, $currency_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'customer_id' => $model->customer_id, 'currency_id' => $model->currency_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CusBalance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $customer_id
     * @param integer $currency_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($customer_id, $currency_id)
    {
        $this->findModel($customer_id, $currency_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CusBalance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $customer_id
     * @param integer $currency_id
     * @return CusBalance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($customer_id, $currency_id)
    {
        if (($model = CusBalance::findOne(['customer_id' => $customer_id, 'currency_id' => $currency_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
