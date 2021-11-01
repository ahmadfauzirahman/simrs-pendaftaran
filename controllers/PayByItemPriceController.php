<?php

namespace app\controllers;

use Yii;
use app\models\PayByItemPrice;
use app\models\PayByItemPriceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PayByItemPriceController implements the CRUD actions for PayByItemPrice model.
 */
class PayByItemPriceController extends Controller
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
     * Lists all PayByItemPrice models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PayByItemPriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PayByItemPrice model.
     * @param integer $pay_by_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pay_by_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($pay_by_id, $seq),
        ]);
    }

    /**
     * Creates a new PayByItemPrice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PayByItemPrice();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_by_id' => $model->pay_by_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PayByItemPrice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $pay_by_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pay_by_id, $seq)
    {
        $model = $this->findModel($pay_by_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pay_by_id' => $model->pay_by_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PayByItemPrice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $pay_by_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pay_by_id, $seq)
    {
        $this->findModel($pay_by_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PayByItemPrice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $pay_by_id
     * @param integer $seq
     * @return PayByItemPrice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pay_by_id, $seq)
    {
        if (($model = PayByItemPrice::findOne(['pay_by_id' => $pay_by_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
